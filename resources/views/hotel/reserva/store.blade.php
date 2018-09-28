@extends('hotel.template.main')

@section('title','Registrar Solicitud de Reserva')

@section('content')

<div class="page-header">
  <div class="row  justify-content-md-center">
    <h1>Solicitud de Reserva</h1>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-7">

  <form method="POST" action="{{ route('guarda_reserva') }}" class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" value="{{ $cliente->id }}" name="cliente_id" id="cliente_id">
    <input type="hidden" value="{{ $tipo->precio }}" name="precio_tipo">

    <legend>Estimado: {{ $cliente->nombre }} {{ $cliente->apellido }}</legend>


            <div class="form-group">
                <label>Numero de dias</label>
                <input class="form-control" type="number" value="1" name="dias" id="dias" min="1" required="">
            </div>

            <div class="form-group">
                <label>Numero de dias</label>
                <input class="form-control" type="date" name="fecha" id="fecha" required="">
            </div>

            <div class="form-group">
                <label>Seleccione las habitacion tipo {{ $tipo->nombre }}</label>
                <select name="habitaciones"  class="form-control">
                    @foreach($habitaciones as $habi)
                    <option value="{{ $habi->id }}">{{ $habi->nombre }}</option>
                    @endforeach
                </select>
            </div>

    <button type="submit" class="btn btn-primary">Registrar</button>

  </form>

  </div>
</div>

@endsection

