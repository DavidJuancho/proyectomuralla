<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;
class Reserva extends Model
{
    protected $table = 'reservas';
    protected $fillable = ['fecha', 'cliente_id','precio','dias','estado'];

    public function listar()
    {
    	return DB::table('clientes')
    		->join('reservas','clientes.id','=','reservas.cliente_id')
    		->join('reserva_habitaciones','reserva_habitaciones.reserva_id','=','reservas.id')
    		->join('habitaciones','habitaciones.id','=','reserva_habitaciones.habitacione_id')
    		->join('tipo_habitaciones','habitaciones.tipo_habitacione_id','=','tipo_habitaciones.id')
    		->select('clientes.nombre as cliente_nombre','reservas.id as reservas_id','habitaciones.nombre as habitacion_nombre','tipo_habitaciones.nombre as tipo_nombre')
    		->get();
    }
}
