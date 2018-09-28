<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\Models\Cliente;
class Cliente extends Model
{
	protected $table ='clientes';
	protected $fillable=['nombre','apellido','telefono','email'];

    public function GetClienteByDni($dni){
    	$datos= DB::table("clientes")
    		->select('clientes.*')
    		->where('clientes.dni','=',$dni)
    		->first();
    	return $datos;
    }

    public function GetClienteById($id){
    	$datos= DB::table("clientes")
    		->select('clientes.*')
    		->where('clientes.id','=',$id)
    		->first();
    	return $datos;
    }
}
