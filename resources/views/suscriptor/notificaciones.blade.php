@extends('plantillas.plantilla_suscriptor')
@section('content')
<div class="container">
  @livewire("chat-form")
  @livewire("chat-list")
</div>

@endsection
