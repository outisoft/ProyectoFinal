@extends('plantillas.plantilla_suscriptor')
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
        <!--a href="#"><img src="{{ asset('iconos/Cash_in_Hand.ico') }}" width="30" height="30"></a-->
        <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{$servicios['id']}}"><img src="{{ asset('iconos/Cash_in_Hand.ico') }}" width="30" height="30"></a>
      </td>
    </tr>

  @endforeach
  </tbody>
</table>

<!-- delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Desea obtener el servicio?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Seleccione "Continuar" para agregar el servicio a su cuenta.</div>
            <div class="modal-footer">

            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <form method="POST" action="{{ url('/verservicios')}}">
                @csrf
                <input type="hidden" id="post_id" name="post_id" value="">
                <a class="btn btn-primary" onclick="$(this).closest('form').submit();">Continuar</a>
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
