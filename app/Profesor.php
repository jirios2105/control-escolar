<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Materia;
use App\Grupo;

class Profesor extends Model
{
    

    public function materias()
    {
    	$materias= $this->belongsToMany(Materia::class,'profesor_grupo_materias','profesor_id')->distinct('materia_id')->get();
    	
    	return $materias;
    }

     public function grupos()
    {
    	$grupos= $this->belongsToMany(Grupo::class,'profesor_grupo_materias','profesor_id')->distinct('grupo_id')->get();
    	
    	return $grupos;
    }
}
