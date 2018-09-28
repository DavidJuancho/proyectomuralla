@extends('hotel.template.main')

@section('title','Seleccionar Tipo')

@section('content')

<div class="page-header">
  <div class="row  justify-content-md-center">
    <h1>Solicitud para reserva | Tipo</h1>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-7">

  <form method="POST" action="{{ route('seleccionar.tipo') }}" class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" value="{{$cliente->id}}" name="cliente_id" id="cliente_id">

    <legend>Estimado:  {{ $cliente->nombre }} {{ $cliente->apellido }}</legend>

    <div class="form-group">
      <label>Selecione el tipo de habitación</label>
      <select name="tipo_id" id="tipo_id" class="form-control">
        @foreach($tipos as $tipo)
            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Continuar</button>

  </form>

  </div>
</div>

@endsection

@section('my-js')
<script type="text/javascript">
    /*
    $("#tipo_id").change(event => {
        $.get('habitaciones/${event.target.value}', function(res, sta){
            $("#habitaciones_id").empty();
            res.forEach(element => {
                $("#habitaciones_id").append('<option value=${res.id}> ${res.nombre} </option>');
            });
        })
    });

$('#tipo_id').change(function(){

var id = $(this).val();  

       $.ajax({
            url: "publicaciones/"+id, 
            method: "POST",  
            data:{id:id},  
            success:function(data){
                 $('#show_cities').html(data);  
           }  

       });  

}); */
</script>
@endsection