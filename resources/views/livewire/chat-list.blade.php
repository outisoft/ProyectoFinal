<div>
    <h5><strong>Lista de mensajes</strong></h5>
    @foreach ($mensajes as $mensaje)
      <li>{{$mensaje["usuario"]}}: {{$mensaje["mensaje"]}}</li>
    @endforeach
</div>
