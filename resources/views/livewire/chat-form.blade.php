<div>
  <div class="form-group">
    <label for="sender_id">De: {{ Auth::user()->name }}</label>
  </div>
  <form method="POST" action="{{ route('chat.store') }}">
    {{ csrf_field() }}
  <div class="panel-body">
    <div class="form-group">Para:
      <select name="recipient_id" class="form-control">
        <option value="">selecionar usuario</option>
        @foreach ($users as $user)
          <option value="{{ $user->id}}">{{ $user->name}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="body">Title:</label>
    <input type="text" name="body" class="form-control" id="body" placeholder="Escribe un mensaje..." value="{{ old('body') }}">
  </div>
  <button class="btn btn-primary">Enviar</button>
</form>

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
