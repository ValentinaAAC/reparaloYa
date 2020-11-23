<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>¡Repáralo Ya!</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
    html, body{
        font-family: 'PT Sans', sans-serif;
        
      }
    </style>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/estilo_perfil.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css' />
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    @livewireStyles
    @livewireScripts
</head>
<body>

<div class="wrapper">
     <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-4.jpg">

    <!--  aqui <section></section> puede cambiar el color del sidebar="blue | azure | green | orange | red | purple" -->

   <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    !Repáralo Ya!
                </a>
            </div>

              <ul class="nav">
                   
                <ul class="nav">
                <li>
                    <a href="{{ env('APP_URL', '').'/solicitudtecnico' }}">
                        <i class="pe-7s-tools"></i>
                        <p>Solicita un tecnico</p>
                    </a>
                </li>

                <li>
                    <a href="{{ env('APP_URL', '').'/historialusuario' }}">
                        <i class="pe-7s-note2"></i>
                        <p>Historial</p>
                    </a>
                </li>

               <li class="">
                    <a href="{{ env('APP_URL', '').'/chatusuario' }}">
                        <i class="pe-7s-chat"></i>
                        <p>Chat</p>
                    </a>
                </li>
                
                 <li class="">
                    <a href="{{ env('APP_URL', '').'/usuario' }}">
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
               </ul>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Usuario</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
									Ayuda
									<b class="caret"></b>
								</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Reclamos y sugerencias</a></li>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                            <label for="message-text" class="col-form-label">Escriba aqui su reclamo o sugerencia:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                            </div>

                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Enviar</button>
                                        </form>
                                    </div>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
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

                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar sesión') }}
                                    </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

<!--------------------------------------------------- Perfil------------------------------------------------------>

        @yield('contenido')
 

              
</body>


    

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>



</html>
