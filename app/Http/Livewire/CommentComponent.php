<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;
use App\Models\Comment;

use Illuminate\Support\Facades\Auth;

class CommentComponent extends Component
{
    public $user, $body, $user_id;
    public $accion = "store";

    public function render()
    {
        /* Le pasamos parametros al componente para que los muestre */
        $comments = Comment::with('user')->get();
        return view('livewire.comment-component', compact('comments'));
    }

    public function store()
    {
        /* De esta forma se validan los campos antes de guadarlos */
        $this->validate([
            'body' => 'required|min:5'
        ]);
            /* Almacenamos los campos en la DB */
        Comment::create([
            'body' => $this->body,
            'user_id' => Auth::user()->id,
        ]);
        $this->default();
    }

    public function edit(Comment $comment)
    {
        $this->name = $comment->name;
        $this->body = $comment->body;
        $this->user_id = $comment->id;
        $this->accion = "update";
    }

    /* Este metodo es para validar los datos en tiempo real */
    public function updated($field)
    {
        $this->validateOnly($field, [
            'body' => 'required|min:5'
        ]);
    }

    public function update()
    {
        $comment = Comment::find($this->user_id);

        $comment->update([
            'body' => $this->body,
            'user_id' => Auth::user()->id,
        ]);
        $this->default();
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        $this->default();
    }

    public function
    default()
    {
        $this->reset(['user', 'body', 'accion', 'user_id']);
    }
}
