@extends('plantillas.plantilla_suscriptor')
@section('content')

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Nombre del servicio</th>
      <th>Precio</th>
      <th>Monto Mora</th>
      <th>Acciones</th>
      <th>Usuario</th>
    </tr>
  </thead>

  @foreach( $cuenta as $cuentas)
  <tbody>
    <tr>
      <td>{{ $cuentas->servicio->nombre}}</td>
      <td>$ {{ $cuentas->servicio}}</td>
      <td>$ </td>
      <td></td>
      <td>{{ $cuentas->suscriptor_id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
