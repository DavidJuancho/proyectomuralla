<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_habitaciones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('reserva_id')->unsigned();
            $table->foreign('reserva_id')->references('id')->on('reservas')->onDelete('cascade');

            $table->integer('habitacione_id')->unsigned();
            $table->foreign('habitacione_id')->references('id')->on('habitaciones')->onDelete('cascade');

            $table->double('precio')->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reserva_habitaciones');
    }
}
