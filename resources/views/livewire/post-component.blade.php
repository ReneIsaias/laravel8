<div>
    <div>
        <div>
            <label>Name :</label>
            <input wire:model="name" class="form-control" id="name" type="text" placeholder="Name of post">
        </div>
        <div class="">
            <label>Body :</label>
            <textarea wire:model="body" name="body" id="body" class="form-control" rows="4" placeholder="Body of post"></textarea>
        </div>
        <br>
        @if ($accion == "store")
            <button wire:click="store" class="btn btn-primary">Agregar Post</button>
        @else
            <button wire:click="update" class="btn btn-secondary">Actualizar Post</button>
            <button wire:click="default" class="btn btn-danger">Cancelar</button>
        @endif
    </div>
    <br><br>
    <h1>POST</h1>
    <table class="table table-striped table-bordered table-dark">
        <thead>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>BODY</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <button wire:click="edit({{ $post }})" class="btn btn-success">Editar</button>
                        <button wire:click="destroy({{ $post }})" class="btn btn-danger">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
