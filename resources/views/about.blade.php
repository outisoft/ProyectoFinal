@extends('layouts.app')

@section('content')

    <!-- Page Header -->
    <header class="masthead" >
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading" style="color: gray">
            <h1>Anonimo:</h1>
            <!--span class="subheading">This is what I do.</span-->
            </div>
        </div>
        </div>
    </div>
    </header>

    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4" style="color: #FDFEFE">
        <h1 class="h3 mb-0 text-gray-800">Servicios disponibles:</h1>
      </div>
      <div class="row">
        @foreach ($servicio as $servicios)
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $servicios['nombre']}}</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">${{ $servicios['precio']}}</div>
                </div>
                <div class="col-auto">
                  <img src="{{ asset('iconos/ReceiveCash_96px.png') }}" width="40" height="40">
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

  <div class="row">
    @foreach ($servicio as $servicios)
    <div class="col-lg-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{ $servicios['nombre']}}</h6>
        </div>
        <div class="card-body">
          {!! $servicios['descripcion'] !!}
        </div>
      </div>
    </div>
    @endforeach
  </div>
      <hr style="color: #FFFFFF">




@endsection
