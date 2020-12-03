<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="userId" content="{{ Auth::check() ? Auth::user()->id : '' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Chat</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
   



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
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <div class="wrapper">
     <div class="sidebar" data-color="Red" data-image="assets/img/sidebar-4.jpg">

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
                <li class="">
                    <a href="{{ env('APP_URL', '').'/ayuda' }}">
                        <i class="pe-7s-help1"></i>
                        <p>Ayuda</p>
                    </a>
                </li>
               </ul>
            </ul>
    	</div>
    </div>
    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                   
                    <ul class="nav navbar-nav navbar-right">
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

    <div class="main-panel">
		
            <div class="container-fluid">
                <div class="container">
               
                  
                
                </div>
            </div>
        
    
            
        </nav>

        <main class="py-4">
            @yield('contenido')
        </main>
    </div>
       
    <script src="{{ mix('js/app.js') }}" defer></script>
 
</body>
</html>

</body>


    

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>