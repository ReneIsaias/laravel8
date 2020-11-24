<div>
    <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <textarea wire:model="mensaje" autofocus name="mensaje" id="mensaje" class="form-control" rows="2" placeholder="Algo que quieras aportar al grupo"></textarea>
        {{-- <input type="text" class="form-control" id="mensaje" wire:model="mensaje"> --}}
    </div>
    <button class="btn btn-primary" wire:click="enviarMensaje">Send</button>
<br>
    {{-- Mensajes de Alerta --}}
    <div style="position: absolute; top:10px; right:10px;" class="alert alert-success collapse mt-3"
          role="alert" id="avisoSuccess">
        Se ha enviado
    </div>

    <script>
        window.livewire.on('mensajeEnviado', function(){
            $("#avisoSuccess").fadeIn("slow");

            setTimeout(function(){
                $("#avisoSuccess").fadeOut("slow");
            }, 3000);
        });
    </script>
</div>
