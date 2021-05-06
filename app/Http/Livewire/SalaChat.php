<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use App\Models\User;
use Livewire\Component;

class SalaChat extends Component
{
    public $userName;
    protected $listeners = ['converse'];

    public function render()
    {
        return view('livewire.sala-chat');
    }

    public function converse(User $user)
    {
        $this->userName = $user->name;

        $user_a = auth()->user();
        $user_b = $user;

        $chat = $user_a->chats()->wherehas('users',function($query) use ($user_b){
            $query->where('chat_user.user_id',$user_b->id);
        })->first();

        if(!$chat){
            $chat = Chat::create([]);
            $chat->users()->sync([$user_a->id,$user_b->id]);
        }
        
        abort_unless($chat->users->contains(auth()->id()),403);
        // return view('chat',compact('chat'));
    }
}
