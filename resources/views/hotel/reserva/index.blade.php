@extends('hotel.template.main')

@section('title','Reservas')

@section('content')

<div class="page-header">
  <div class="row  justify-content-md-center">
    <h1>Lista de Reservas </h1>
  </div>
</div>

<div class="row justify-content-md-center">
  <div class="col-lg-10">

    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Cliente</th>
      <th scope="col">Id reservacion</th>
      <th scope="col">Habitacion</th>
      <th scope="col">Tipo Habitacion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reservas as $reserva)
    <tr>
      <td>{{$reserva->cliente_nombre}}</td>
      <td>{{$reserva->reservas_id}}</td>
      <td>{{$reserva->habitacion_nombre}}</td>
      <td>{{$reserva->tipo_nombre}}</td>
    </tr>
    @endforeach
  </tbody>
</table> 

  </div>
</div>

@endsection