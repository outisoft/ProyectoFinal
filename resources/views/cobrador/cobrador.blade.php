@extends('plantillas.plantilla_cobrador')
@section('content')

<div class="container box">
   <h3 align="center">Buscador de Usuarios</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">Buscar</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Usuarios: <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>RFC</th>
           <th>Email</th>
         </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
     </div>
    </div>
   </div>
  </div>

@endsection
@section('codigo')
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('buscar.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
@endsection
