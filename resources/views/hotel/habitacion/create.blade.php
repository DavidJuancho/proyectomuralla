@extends('hotel.template.main')

@section('title','Registrar Habitacion')

@section('content')

<div class="page-header">
  <div class="row  justify-content-md-center">
    <h1>Registrar Habitacion</h1>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-7">

  <form method="POST" action="{{ route('habitacion.store') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
      <label  class="col-form-label">Nombre <small class="text-muted">(*)</small></label>
      <input name="nombre" type="text" class="form-control" required>     
    </div>

    <div class="form-group">
      <label for="exampleSelect1">Example select</label>
      <select class="form-control" name="tipo_habitacione_id">
        @foreach($tipos as $tipo)
          <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>

  </form>

  </div>
</div>

@endsection