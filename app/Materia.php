<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profesor;
use App\Grupo;
class Materia extends Model
{
    

     public function profesores()
    {
    	$materias= $this->belongsToMany(Profesor::class,'profesor_grupo_materias','materia_id')->distinct('profesor_id')->get();
    	
    	return $materias;
    }

    public function grupos()
    {
    	$grupos= $this->belongsToMany(Grupo::class,'profesor_grupo_materias','materia_id')->distinct('grupo_id')->get();
    	
    	return $grupos;
    }

    public function gruposbyProfesor()
    {
        $grupos=\DB::table('grupos')
        ->join('profesor_grupo_materias','profesor_grupo_materias.grupo_id','=','grupos.id')
        ->where([

            ['profesor_grupo_materias.profesor_id',auth()->user()->profesor->id],
            ['profesor_grupo_materias.materia_id',$this->id]

         ])
        ->select([
            'grupos.id',
            'grupos.grupo',
            'grupos.cuatrimestre',
            'profesor_grupo_materias.id as profe_mate_id',
        ])
        ->get();

      
        return $grupos;
    }
}
