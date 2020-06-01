@extends('layouts.app')

@section('content')

    <!-- Page Header -->
    <header class="masthead" >
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading" style="color: #FDFEFE">
            <h1>About this</h1>
            <span class="subheading">This is what I do.</span>
            </div>
        </div>
        </div>
    </div>
    </header>


    <!-- Main Content -->
    <div class="container" style="color: #FDFEFE">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <img src="{{ asset('imagenes/pic1.png') }}" width="400" height="300">
          <p>El Servicio BASICO cuenta con seciones de lunes, mircoles y viernes, con un limite de 2 horas por dia, limite de 4 equipos por tan solo $300 mensuales</p>
          <img src="{{ asset('imagenes/pic7.png') }}" width="230" height="150">
          <p>El Servicio PREMIUM cuenta con seciones de lunes a viernes, con un limite de 6 horas por dia, limite de 8 equipos por tan solo $500 mensuales</p>
          <img src="{{ asset('imagenes/pic2.png') }}" width="300" height="200">
          <p>El Servicio PLATINUM cuenta con seciones de lunes a sabado, sin un limite de horas por dia, sin limite de equipos a utilizar todo esto por tan solo $699 mensuales</p>
        </div>
    </div>
    </div>

    <hr>

@endsection
