<?php

namespace App\Livewire;

use App\Events\sendMessageEvent;
use App\Models\Message;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatComponent extends Component
{
    public $user;
    public $sender_id;
    public $receiver_id;
    public $message = '';
    public $messages = [];

    public function render()
    {
        return view('livewire.chat-component');
    }

    public function mount($id)
    {
        $this->sender_id = auth()->user()->id;
        $this->receiver_id = $id;

        $messages = Message::where(function ($query) {
            $query->where("sender_id", $this->sender_id)->where("receiver_id", $this->receiver_id);
        })->orWhere(function ($query) {
            $query->where("sender_id", $this->receiver_id)->where("receiver_id", $this->sender_id);
        })->with('sender:id,name', 'receiver:id,name')->get();

        foreach ($messages as $mesg) {
            $this->appendChatMessages($mesg);
        }


        $this->user = User::whereId($id)->first();
    }

    public function sendMessage()
    {
        $chat = Message::create([
            'receiver_id' => $this->receiver_id,
            'sender_id' => $this->sender_id,
            'message' => $this->message
        ]);

        broadcast(new sendMessageEvent($chat))->toOthers();
        $this->message = '';
    }

    #[On('echo-private:chat-channel.{sender_id},sendMessageEvent')]
    public function listenForMessage($event)
    {
        dd($event);
    }

    public function appendChatMessages($mesg)
    {
        $this->messages[] = [
            'id' => $mesg->id,
            'sender' => $mesg->sender->name,
            'receiver' => $mesg->receiver->name,
            'message' => $mesg->message
        ];
    }
}
