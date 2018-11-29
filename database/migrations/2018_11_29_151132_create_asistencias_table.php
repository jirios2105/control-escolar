<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('asistio');
            $table->date('fecha');
            $table->integer('alumno_id')->unsigned();
            $table->integer('profe_grup_mat')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('profe_grup_mat')->references('id')->on('profesor_grupo_materias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencias');
    }
}
