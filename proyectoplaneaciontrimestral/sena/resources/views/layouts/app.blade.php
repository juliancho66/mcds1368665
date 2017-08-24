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
                            <span class="sr-only">
                                1111
                            </span>
                            <span class="icon-bar">
                                2222
                            </span>
                            <span class="icon-bar">
                                3333
                            </span>
                            <span class="icon-bar">
                                4444
                            </span>
                        </button>
                        <!-- Inicio a pagina principal-->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <i aria-hidden="true" class="fa fa-home fa-2x ">
                            </i>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
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
