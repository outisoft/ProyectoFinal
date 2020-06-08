<div>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" id="nombre" wire:model="nombre">
    @error("nombre") <small class="text-danger">{{$message}}</small>@enderror
  </div>

  <div class="form-group">
    <label for="mensaje">Mensaje:</label>
    <input type="text" class="form-control" id="mensaje" wire:model="mensaje">
    @error("mensaje") <small class="text-danger">{{$message}}</small>@enderror
  </div>

  <button class="btn btn-primary" wire:click="enviarMensaje">Enviar</button>

  <!--alerta-->
  <div style="position:absolute; top: 10px; right: 10px;"
    class="alert alert-success collapse mt-4"
    role="alert" id="avisoSuccess">Enviado
  </div>

  <script>
  windows.livewire.on('mensajeEnviado', function(){
    //mostrar aviso
    $("#avisoSuccess").fadeIn("slow");

    //ocultar aviso
    setTimeout(function(){$("#avisoSuccess").fadeOut("slow");}, 3000);
  });
  </script>
</div>
