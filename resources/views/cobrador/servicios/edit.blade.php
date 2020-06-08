@extends('plantillas.plantilla_cobrador')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/servicios/{{ $servicio->id }}" enctype="multipart/form-data">
  @method('PATCH')
{{ csrf_field() }}
<div class="card">
  <h5 class="card-header">Actualizar Servicio:  </h5>
  <div class="card-body">

    <div class="form-group">
      <label for="nombre">Title:</label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del servicio..." value="{{ $servicio->nombre }}">
    </div>

    <div class="form-group">
      <label for="precio">Precio:</label>
      <input type="text" name="precio" class="form-control" id="precio" placeholder="Precio del servicio..." value="{{ $servicio->precio }}">
    </div>

    <div class="form-group">
      <label for="MontoMora">Monto Mora:</label>
      <input type="text" name="MontoMora" class="form-control" id="MontoMora" placeholder="Monto mora del servicio..." value="{{ $servicio->MontoMora }}">
    </div>

    <div class="form-group">
      <label for="descripcion">Descripcion:</label>
      <textarea name="descripcion" id="descripcion">{{ $servicio->descripcion }}</textarea>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Actualizar">
    </div>
    </div>
  </div>
</form>

<script>
    CKEDITOR.replace( 'descripcion' );
</script>

@endsection
