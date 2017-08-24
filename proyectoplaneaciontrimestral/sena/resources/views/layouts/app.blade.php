<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <!-- CSRF Token -->
                    <meta content="{{ csrf_token() }}" name="csrf-token">
                        <title>
                            ::..  Planeacion Trimestral Sena ..::
                        </title>
                        <!-- Styles -->
                        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                            <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
                            </link>
                        </link>

                        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
                        <link href="{{ asset('css/bootstrap-theme.min.css') }}" rel="stylesheet">
                        <link href="{{ asset('css/fileinput.min.css') }}" rel="stylesheet">
                        

                       
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Collapsed Hamburger -->
                        <button class="navbar-toggle collapsed" data-target="#app-navbar-collapse" data-toggle="collapse" type="button">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Inicio a pagina principal-->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <i aria-hidden="true" class="fa fa-home fa-2x ">
                            </i>
                        </a>
                        
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                         <ul class="nav navbar-nav textPrimary">
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle textPrimary" data-toggle="dropdown" role="button" aria-expanded="false">Gestionar<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a  class="btn btn-success btn-block" href="{{route('centros.index')}}">
                <i  class="fa fa-hand-o-right"> Centros de Formacion</i> </a></li>
                                        <li><a class="btn btn-success btn-block" href="{{route('ambientes.index')}}">
                <i class="fa fa-hand-o-right">Ambientes</i> </a></li>
                                        <li><a  class="btn btn-success btn-block" href="{{route('especialidads.index')}}">
                <i  class="fa fa-hand-o-right">Especialidades</i></a></li>
                                        <li><a  href=""><i class="fa fa-btn fa-sign-out"></i>Instructores</a></li>
                                        <li><a  href=""><i class="fa fa-btn fa-sign-out"></i>Instituciones</a></li>
                                        
                                    </ul>
                                </li>
                        </ul>

                        <ul class="nav navbar-nav textPrimary">
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle textPrimary" data-toggle="dropdown" role="button" aria-expanded="false">Disponibilidad<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a  href=""><i class="fa fa-btn fa-sign-out"></i>Ambientes</a></li>
                                        <li><a  href=""><i class="fa fa-btn fa-sign-out"></i>Instructores </a></li>
                                                                              
                                    </ul>
                                </li>
                        </ul>

                         <ul class="nav navbar-nav textPrimary">
                            <li class="dropdown">
                                    <a href="#" class="dropdown-toggle textPrimary" data-toggle="dropdown" role="button" aria-expanded="false">Porcentajes<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a  href=""><i class="fa fa-btn fa-sign-out"></i>Ambientes</a></li>
                                        <li><a  href=""><i class="fa fa-btn fa-sign-out"></i>Instructores </a></li>
                                                                              
                                    </ul>
                                </li>
                        </ul>

                         <ul class="nav navbar-nav">
                            <li><a class="textPrimary" href="">Creacion Fichas</a></li>                                      
                        </ul>




                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li>
                                <a href="{{ route('login') }}">
                                    <i aria-hidden="true" class="fa fa-user fa-2x ">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('register') }}">
                                    <i aria-hidden="true" class="fa fa-user-plus fa-2x ">
                                    </i>
                                </a>
                            </li>
                            @else
                            <li class="dropdown">
                                <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                    {{ Auth::user()->name }}
                                    <span class="caret">
                                    </span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar Sesion
                                        </a>
                                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}">
        </script>
    </body>
</html>
