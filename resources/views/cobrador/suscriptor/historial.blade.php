@extends('plantillas.plantilla_cobrador')
@section('content')

<div class="col-md-20 card-header">
  <h1>Informacion general de {{ $suscriptor->name }}</h1>
</div>
<br></br>
<h5 class="col-md-6">Nombre:  </h5>
<label for="Nombre"> {{ $suscriptor->name}} {{ $suscriptor->last_name}}</label>
<br></br>
<h5 class="col-md-6">Correo:  </h5>
<label for="Correo">{{ $suscriptor->email}}</label>
<br></br>
<h5 class="col-md-6">RFC:  </h5>
<label for="Correo">{{ $suscriptor->rfc}}</label>
<br></br>
<h5 class="col-md-6">fecha de Registro:  </h5>
<label for="Correo">{{ $suscriptor->created_at}}</label>

@endsection
