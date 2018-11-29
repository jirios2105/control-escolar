<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    //

    public function calificar(Request $request)
    {
    	
    	foreach ($request->alumnos_ids as $key => $alumno_id) {
    	$alumno=\App\Alumno::find($alumno_id);
    	$calificacion=$alumno->getCalificacion($request->profesor_materia_id);
    	if (!$calificacion){
    		$calificacion=new \App\Calificacion();
    	}

    	$calificacion->calificacion=$request->calificacion[$key];
    	$calificacion->alumno_id=$alumno_id;
    	$calificacion->profe_grup_mat=$request->profesor_materia_id;
    	$calificacion->fecha=$request->fecha;
    	$calificacion->save();

    		
    	}

    	return redirect()->back()->with(['msg'=>'Se gueardo la información exitosamente']);
    }
}
