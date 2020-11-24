<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ChatForm extends Component
{

    public $nombre;
    public $mensaje;

    public function mount()
    {
        $this->nombre = Auth::user()->name;
        $this->mensaje = "";
    }
    public function render()
    {
        return view('livewire.chat-form');
    }

    public function enviarMensaje()
    {
        $this->validate([
            'user_id' => 'required|min:5',
            'mensaje' => 'required'
        ]);
        $this->emit("mensajeEnviado");
    }
}
