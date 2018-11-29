<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    public function getCalificacion($profesor_materia_id)
    {
    	$calificacion=\App\Calificacion::where([
    		['alumno_id',$this->id],
    		['profe_grup_mat',$profesor_materia_id]

    	])->get()->first();
    	
    	
    	return $calificacion;
    }
}
