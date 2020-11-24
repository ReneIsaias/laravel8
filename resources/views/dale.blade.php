<div>
    <div class="container">

        @foreach ($comments as $comment)
            <label>{{ $comment->user->name }}</label>
            <input class="form-control" type="text" disabled value="{{ $comment->body }}">
            <hr>
        @endforeach
        <hr>
        <div>
            <label>Comentario :</label>
            <textarea wire:model="body" required autofocus name="body" id="body" class="form-control" rows="2" placeholder="Algo que quieras aportar al grupo"></textarea>
        </div>
        <button wire:click="store" class="btn btn-primary">Comentar</button>
        <hr>
    </div>
</div>
