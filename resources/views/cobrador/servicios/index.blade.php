@extends('plantillas.plantilla_cobrador')
@section('content')



@if (\Session::has('success'))
<div class="alert alert-success alert-dismissible">
  {{ \Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif

@if (\Session::has('warning'))
<div class="alert alert-info alert-dismissible">
  {{ \Session::get('warning') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif

@if (\Session::has('error'))
<div class="alert alert-danger alert-dismissible">
  {{ \Session::get('error') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif


<div class="row py-lg-2">
  <div class="col-md-6 h3 mb-1 text-gray-800">
    <h1>Servicios:</h1>
  </div>
  <div class="col-md-6">
    <a href="/servicios/create" class="btn btn-success btn-icon-split float-md-right">
      <span class="icon text-white-50">
        <i class="fas fa-check">+</i>
      </span>
      <span class="text">Nuevo</span>
    </a>
  </div>
</div>


<div class="row">
  @foreach ($servicio as $servicios)
  <div class="col-lg-6">
    <div class="card-body shadow mb-4 card mb-4 py-3 border-bottom-primary">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $servicios['nombre']}}</h6>
      </div>
      <div class="card-body"> Descripcion: {!! $servicios['descripcion'] !!}
        <p class="mb-4">Precio: ${{ $servicios['precio']}}</p>
        <a href="/servicios/{{ $servicios['id'] }}/edit"><img src="{{ asset('iconos/Edit.ico') }}" width="30" height="30"></a>
        <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{$servicios['id']}}"><img src="{{ asset('iconos/Cancel.ico') }}" width="30" height="30"></a>
      </div>
      <div class="card-body">
        <img src="image/{{ $servicios->Foto1 }}" width="100" class="img-thumbnail"/>
        <img src="image/{{ $servicios->Foto2 }}" width="100" class="img-thumbnail"/>
        <img src="image/{{ $servicios->Foto3 }}" width="100" class="img-thumbnail"/>
      </div>
    </div>
  </div>
  @endforeach
</div>

<!--a href="/servicios/create" class="btn btn-success float-md-right" role="button" aria-pressed="true">AGREGAR</a-->
<!-- delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you shure you want to delete this?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Select "delete" If you realy want to delete this post.</div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="POST" action="/servicios/{{$servicios->id}}">
                @method('DELETE')
                @csrf
                <input type="hidden" id="post_id" name="post_id" value="">
                <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Delete</a>
            </form>
            </div>
        </div>
        </div>
    </div>

@endsection

@section('js_post_page')
    <script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var post_id = button.data('postid')

            var modal = $(this)
            modal.find('.modal-footer #post_id').val(post_id)
        })
    </script>
@endsection
