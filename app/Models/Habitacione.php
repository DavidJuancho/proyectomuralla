<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;
class Habitacione extends Model
{
    protected $table='habitaciones';
    protected $fillable=['nombre', 'tipo_habitacione_id','estado'];

    public static function habitacionesPorTipo($id)
    {
    	return Habitacione::where('tipo_habitacione_id','=',$id)
    		->get();
    }/*
    habitacionesPorTipo($id)
    {
    	return DB::table('habitaciones')->where('habitaciones.tipo_habitacione_id','=',$id)
    		->get();
    }*/
}
