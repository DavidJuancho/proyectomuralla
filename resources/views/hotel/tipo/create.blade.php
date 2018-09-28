@extends('hotel.template.main')

@section('title','Crear tipo de habitacion')

@section('content')

<div class="page-header">
  <div class="row  justify-content-md-center">
    <h1>Crear categoria</h1>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-7">

  <form method="POST" action="{{ route('tipo.store') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      <label  class="col-form-label">Nombre <small class="text-muted">(*)</small></label>
      <input name="nombre" type="text" class="form-control" required>     
    </div>

    <div class="form-group">
      <label  class="col-form-label">Precio <small class="text-muted">(*)</small></label>
      <input name="precio" type="text" class="form-control" required>     
    </div>

    <button type="submit" class="btn btn-primary">Agregar</button>

  </form>

  </div>
</div>

@endsection