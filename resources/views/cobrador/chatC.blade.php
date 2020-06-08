@extends('plantillas.plantilla_cobrador')
@section('content')
<form method="POST" action="{{ route('chat.store') }}">
  {{ csrf_field() }}
<div class="panel-body">
  <div class="form-group">
    <select name="user_id" class="form-control">
      <option value="">selecionar usuario</option>
      @foreach ($users as $user)
        <option value="{{ $user->rol}}">{{ $user->name}}</option>
      @endforeach
    </select>
  </div>

</div>
</form>
<div class="container">
  @livewire("chat-form")
  @livewire("chat-list")
</div>

@endsection
