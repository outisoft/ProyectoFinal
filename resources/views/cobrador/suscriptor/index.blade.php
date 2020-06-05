@extends('plantillas.plantilla_cobrador')
@section('content')

<table class="table table-hover">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>RFC</th>
      <th>Email</th>
      <th>Ver</th>
    </tr>
  </thead>
  @foreach ($suscriptor as $suscriptores)
  <tbody>
    <tr>
      <td>{{ $suscriptores->name}}</td>
      <td>{{ $suscriptores->last_name}}</td>
      <td>{{ $suscriptores->rfc}}</td>
      <td>{{ $suscriptores->email}}</td>
      <td>
        <a href="/versuscriptor/{{ $suscriptores->id }}/edit"><img src="{{ asset('iconos/Eye.ico') }}" width="30" height="30"></a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
