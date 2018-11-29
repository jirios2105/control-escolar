<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    @guest 
                       <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                         </a>
                    @else
                      
                         <a class="navbar-brand" href="{{ url('/') }}">
                        {{  auth()->user()->alumno?
                            'Alumno: '.auth()->user()->alumno->nombre." ".auth()->user()->alumno->apellido_paterno." ". auth()->user()->alumno->apellido_materno : 
                             'Profesor: '.auth()->user()->profesor->nombre." ". auth()->user()->profesor->apellido_paterno." ". auth()->user()->profesor->apellido_materno }}
                    </a>
                     @endguest
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li><a href="{{ route('home') }}">Home</a></li>
                             @if(Auth::user()->role_id==2)
                                 <li><a href="#">Calificaciones</a></li>
                            @elseif(Auth::user()->role_id==3)
                                <li><a href="{{ route('profesores.calificaciones') }}">Calificaciones</a></li>
                                <li><a href="{{ route('profesores.asistencia') }}">Asistencias</a></li>

                            @endif
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>


                        @endguest
                    </ul>
                </div>
            </div>
        </nav>