<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumno;
use App\Profesor;
use App\Materia;

class Grupo extends Model
{
    

    public function alumnos()
    {
    	return $this->HasMany(Alumno::class);
    }

    public function profesores()
    {
    	$materias= $this->belongsToMany(Profesor::class,'profesor_grupo_materias','grupo_id')->distinct('profesor_id')->get();
    	
    	return $materias;
    }

     public function materias()
    {
    	$grupos= $this->belongsToMany(Materia::class,'profesor_grupo_materias','grupo_id')->distinct('materia_id')->get();
    	
    	return $grupos;
    }
}
