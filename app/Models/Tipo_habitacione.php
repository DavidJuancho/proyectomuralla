<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\Models\Tipo_habitacione;
class Tipo_habitacione extends Model
{
    protected $table='tipo_habitaciones';
    protected $fillable=['nombre', 'precio'];

    public function ListarTipoHabitaciones(){
    	$datos= DB::table('tipo_habitaciones')->select('tipo_habitaciones.*')->get();
    	return $datos;
    }
}
