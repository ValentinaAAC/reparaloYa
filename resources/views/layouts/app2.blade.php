<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="images/logo.ico" />
    <title>RepáraloYa</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="myModal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Información importante</h4>
                </div>
                <div class="modal-body">
                    <p><strong>¡¡Como colaborador tendrás 7 días de prueba gratuita!!</strong></p>
                    <p>Después de esta prueba, tendrás que realizar una suscripción por $30.000/mes.
                    Este monto tendrá que ser ingresado mediante transferencia a los siguientes datos: </p>
                    <p>
                        - BancoEstado CuentaRUT</br>
                        - RUT: XXXXXXXX-X </br>
                        - Nombre: ReparaloYa </br>
                        - Email: pagosreparaloya@gmail.com
                    </P>
                    <p>
                        Para más información de nuestros servicios disponibles haz <a href="{{ env('APP_URL', '').'/servicios' }}">CLICK AQUÍ</a>
                    </p>
                    <p><strong>¡¡¡Esta aplicación solo es funcional en la localidad de CHILLÁN!!!</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" >
            <div class="container">
            <img src="images/logo.png" width="47" height="47" class="d-inline-block align-top ml-4" alt="" loading="lazy"></a>
                <a class="navbar-brand" href="{{ url('/index') }}">
                    <h2>¡REPÁRALO YA!</h2>
                </a>
             

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('INICIAR SESIÓN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ env('APP_URL', '').'/registrousuario' }}">{{ __('REGISTRARSE') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
