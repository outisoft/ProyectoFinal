@extends('plantillas.plantilla_suscriptor')
@section('content')

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th>Servicios</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Obtener</th>
    </tr>
  </thead>
  @foreach ($servicio as $servicios)
  <tbody>
    <tr>
      <td>{{ $servicios['nombre']}}</td>
      <td>{!! $servicios['descripcion'] !!}</td> <!-- los !! sirven para evitar ejecutar codigo html(cuidado cuando usamos esto)-->
      <td>${{ $servicios['precio']}}</td>
      <td>
        <a href="#"><img src="{{ asset('iconos/Cash_in_Hand.ico') }}" width="30" height="30"></a>
        <!--a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{$servicios['id']}}"><img src="{{ asset('iconos/Cancel.ico') }}" width="30" height="30"></a-->
      </td>
    </tr>

  @endforeach
  </tbody>
</table>
@endsection
