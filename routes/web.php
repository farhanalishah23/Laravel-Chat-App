<?php

use App\Http\Controllers\ChatController;
use App\Models\User;
use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard',function(){
    $users = User::where("id","!=", auth()->user()->id)->get();
    // dd($users);
    return view("dashboard",["users"=>$users]);
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get("/chat/{id}",[ChatController::class , "showChat"])->name("show_chat");

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
