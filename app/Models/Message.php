<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded=[];
    public function sender(){
      return  $this->belongsTo(User::class , "sender_id");
    }

    public function receiver(){
        return  $this->belongsTo(User::class , "receiver_id");
    }
}
