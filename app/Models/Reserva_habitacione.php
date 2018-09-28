<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva_habitacione extends Model
{
    protected $table = 'reserva_habitaciones';
    protected $fillable = ['habitacion_id','reserva_id','precio'];

    
}
