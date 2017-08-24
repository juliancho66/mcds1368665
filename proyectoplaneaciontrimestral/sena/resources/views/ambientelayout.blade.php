<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <title>
                ::.. Ambientes ..::
            </title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
                <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet">
                    <!-- Styles -->
                    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
                        <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css">
                        </link>
                    </link>
                </link>
            </link>
            <!-- Styles -->
            <style>
                html, body {
               
                font-family: 'Arima Madurai', cursive;
                
            }
            </style>
        </meta>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="page-header text-center">
                        Ambientes  ppppp
                        <a class="navbar-brand" href="{{ url('home') }}">
                            <i aria-hidden="true" class="fa fa-home fa-2x ">
                            </i>
                        </a>
                    </h1>
                </div>
                @yield('content')
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
        </script>
    </body>
</html>