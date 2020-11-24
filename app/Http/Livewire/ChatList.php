<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ChatList extends Component
{

    public $mesanjes;

    public function mount(){
        $this->mensajes = Comment::with('user')->get();
    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
