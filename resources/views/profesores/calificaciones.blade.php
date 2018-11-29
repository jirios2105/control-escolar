@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Calificaciones</div>

                <div class="panel-body">
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
                                    @foreach ($materia->grupos() as $grupo)
                                        
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
                                                                <table class="table table-bordered table-hover">
                                                                  <thead>
                                                                    <tr>
                                                                      <th>Alumno</th>
                                                                      <th>calificación</th>
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                    @foreach ($grupo->alumnos as $alumno)
                                                                      <tr>
                                                                        <td>{{$alumno->nombre}} {{$alumno->apellido_paterno}}</td>
                                                                        <td> <input type="text" value="0" placeholder="calificacion" class="form-control" /></p></td>
                                                                      </tr>
                                                                    @endforeach
                                                                  </tbody>
                                                                </table>
                                                           
                                                              
                                                             
                                                      
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
