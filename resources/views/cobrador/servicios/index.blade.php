@extends('plantillas.plantilla_cobrador')
@section('content')
<!--
<div class="row py-lg-2">
  <div class="col-md-6">
    <h1>Servicios</h1>
  </div>
  <div class="col-md-6">
    <a href="/servicios/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Nuevo Servicio</a>
  </div>
</div>
-->
<!-- DataTables Example -->
<!--<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Servicio</div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Servicios</th>
            <th>Inicio</th>
            <th>Fin</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Activo</th>
            <th>Tool</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Servicios</th>
            <th>Inicio</th>
            <th>HFin</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Activo</th>
            <th>Tool</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            td>Basico</td>
            <td>Lunes, Miercoles y Viernes</td>
            <td>2 horas por dia</td>
            <td>4 equipos</td>
            <td>$300</td>
            <td>
              <a href="/serviciosUsuario/001/edit"><i class="fa fa-edit"></i></a>
              <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="001"><i class="fas fa-trash-alt"></i></a>
            </td-->
          <!--/tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>-->


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

<table class="table table-hover">
  <thead>
    <tr>
      <th>Servicio</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Tools</th>
    </tr>
  </thead>
  @foreach ($servicio as $servicios)
  <tbody>
    <tr>
      <td>{{ $servicios['nombre']}}</td>
      <td>{!! $servicios['descripcion'] !!}</td> <!-- los !! sirven para evitar ejecutar codigo html(cuidado cuando usamos esto)-->
      <td>${{ $servicios['precio']}}</td>
      <td>
        <a href="/servicios/{{ $servicios['id'] }}/edit"><img src="{{ asset('iconos/Edit.ico') }}" width="30" height="30"></a>
        <a href="#"  data-toggle="modal" data-target="#deleteModal" data-postid="{{$servicios['id']}}"><img src="{{ asset('iconos/Cancel.ico') }}" width="30" height="30"></a>
      </td>
    </tr>

  @endforeach
  </tbody>

</table>
<a href="/servicios/create" class="btn btn-success float-md-right" role="button" aria-pressed="true">AGREGAR</a>

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
