@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Calificaciones</div>

                <div class="panel-body">
                 @if (session('msg'))
                 <div class="alert alert-success">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                   {{ session('msg') }}
                 </div>
                       
                @endif
                    @foreach (auth()->user()->profesor->materias() as $materia)
                    

                        <div class="panel-group" id="accordion">
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                  <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$materia->id}}">{{$materia->nombre}}</a>
                                </h4>
                             </div>
                            <div id="collapse{{$materia->id}}" class="panel-collapse collapse">
                                <div class="panel-body">

                                    @foreach ($materia->gruposbyProfesor() as $grupo)

                                        
                                            <div class="panel-group" id="accordion-grupos{{$materia->id}}">
                                              <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                          <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion-grupos{{$materia->id}}" href="#collapse-grupo{{$grupo->id}}{{$materia->id}}">{{$grupo->cuatrimestre}} {{$grupo->grupo}}</a>
                                                           </h4>
                                                    </div>
                                                    <div id="collapse-grupo{{$grupo->id}}{{$materia->id}}" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            
                                                                {{-- expr --}}
                                                                     <form action="{{ route('guardar.calificacion') }}" method="POST" accept-charset="utf-8">
                                                                       <b>Día:</b>
                                <input type="date" name="fecha" id="input" class="form-control" value="" required="required" title="">
                                                                      {{ csrf_field() }}
                                                                      <input type="text" name="profesor_materia_id" value="{{$grupo->profe_mate_id}}" placeholder="calificacion" class="hidden" />
                                                                           

                                                                <table class="table table-bordered table-hover">
                                                                  <thead>
                                                                    <tr>
                                                                      <th>Alumno</th>
                                                                      <th>calificación</th>
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                                                                            
                                                                    @foreach (\App\Grupo::find($grupo->id)->alumnos as $alumno)
                                                                      <tr>
                                                                        <td>{{$alumno->nombre}} {{$alumno->apellido_paterno}}</td>

                                                                        <td> 

                                                                          <input type="text" name="calificacion[]" value="{{$alumno->getCalificacion($grupo->profe_mate_id)?$alumno->getCalificacion($grupo->profe_mate_id)->calificacion:0}}" placeholder="calificacion" class="form-control" />

                                                                          <input type="text"  name="alumnos_ids[]" value="{{$alumno->id}}"  class="hidden" />

                                                                        </td>
                                                                      </tr>
                                                                    @endforeach

                                                                  </tbody>
                                                                </table>
                                                                 <button type="submit" class="btn btn-primary">Guardar</button>
                                                                      
                                                                     </form>
                                                           
                                                              
                                                             
                                                      
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                    @endforeach

                                 </div>
                             </div>
                            </div>

                        </div>

                    @endforeach
</div>
</div>


</div>
</div>
</div>
@endsection
