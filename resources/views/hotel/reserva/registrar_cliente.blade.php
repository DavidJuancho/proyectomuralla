@extends('hotel.template.main')

@section('title','Registrar Cliente')

@section('content')

<div class="page-header">
  <div class="row  justify-content-md-center">
    <h1>Registro de Clientes</h1>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-7">

  <form method="POST" action="{{ route('clientes') }}" class="form-group">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <legend>Ingrese la informacion solicitada antes de continuar</legend>

    <div class="form-group">
      <label class="col-form-label">DNI:</label>
      <div class="col-sm-8">
        <input name="dni" class="form-control" type="text" placeholder="Ingrese DNI" value="{{ $dni }}" maxlength="8">
      </div>
    </div>

    <div class="form-group">
      <label class="col-form-label">ingrese nombre:</label>
      <div class="col-sm-9">
        <input name="nombre" class="form-control" type="text" placeholder="Ingrese nombre" value="{{ old('nombre') }}" maxlength="255" autofocus="">
      </div>
    </div>

    <div class="form-group">
      <label class="col-form-label">ingrese apellido:</label>
      <div class="col-sm-9">
        <input name="apellido" class="form-control" type="text" placeholder="Ingrese apellido" value="{{ old('apellido') }}" maxlength="255">
      </div>
    </div>

    <div class="form-group">
      <label class="col-form-label">ingrese telefono:</label>
      <div class="col-sm-9">
        <input name="telefono" class="form-control" type="text" placeholder="Ingrese telefono" value="{{ old('telefono') }}" maxlength="9">
      </div>
    </div>

    <div class="form-group">
      <label class="col-form-label">ingrese email:</label>
      <div class="col-sm-9">
        <input name="email" class="form-control" type="text" placeholder="Ingrese email" value="{{ old('email') }}" maxlength="255">
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Continuar</button>

  </form>

  </div>
</div>

@endsection

