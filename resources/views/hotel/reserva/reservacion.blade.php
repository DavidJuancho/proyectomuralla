@extends('hotel.template.main')

@section('title','Hacer una Reserva')

@section('content')

<div class="page-header">
  <div class="row  justify-content-md-center">
    <h1>Solicitar un Reserva</h1>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-7">

  <form method="POST" action="{{ route('reservar_cliente') }}" class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      <label  class="col-form-label">DNI <small class="text-muted">(*)</small></label>
      <input name="dni" type="text" class="form-control" value="" name="dni" id="dni" required="" maxlength="8">
    </div>

    <input type="submit" class="btn btn-primary" value="Continuar">

  </form>

  </div>
</div>

@endsection