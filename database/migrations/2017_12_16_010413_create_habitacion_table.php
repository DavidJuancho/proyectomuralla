<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');

            $table->integer('tipo_habitacione_id')->unsigned();
            $table->foreign('tipo_habitacione_id')->references('id')->on('tipo_habitaciones')->onDelete('cascade');

            $table->enum('estado',['disponible','ocupado'])->default('disponible');
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
        Schema::drop('habitaciones');
    }
}
