<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="images/logo.ico" />
  <title>¡Repáralo Ya!</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  
</head>
<!--Barra navegadora-->
<body>
  <header id="header">
    <nav class="navbar navbar-default navbar-static-top bg-primary" role="banner">
      <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand text-white" href="#">
        <img src="images/logo.png" width="45" height="45" class="d-inline-block align-top ml-4" alt="" loading="lazy"></a>
          <div class="navbar-brand">
            <a href="{{ env('APP_URL', '').'/index' }}"><h1>¡Repáralo Ya!</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
            @guest
              <li role="presentation"><a href="{{ env('APP_URL', '').'/index' }}" class="">Home</a></li>
                <li role="presentation"><a href="{{ env('APP_URL', '').'/servicios' }}">Servicios</a></li>
                <li role="presentation"><a href="{{ env('APP_URL', '').'/nosotros' }}">Nosotros</a></li>
              <li role="presentation"><a href="">Registrarse</a></li>
              @if (Route::has('register'))
                <li role="presentation"><a href="{{ env('APP_URL', '').'/registrocolaborador' }}">{{ __('Únete a nuestro equipo') }}</a></li>
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
                  <li role="presentation"><a href="{{ env('APP_URL', '').'/login' }}">Iniciar sesión</a></li>
            </ul>
          </div> 
        </div>
      </div>
    </nav>
  </header>
   
    <!--Contenido -->
    @yield('contenido') -> @section('contenido')



<!--Footer oscuro -->
    <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 col-md-offset-4">
        <div class="copyright">
          &copy; ¡Repáralo Ya!. Todos los derechos reservados.
          <div class="credits">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
</body>

</html>