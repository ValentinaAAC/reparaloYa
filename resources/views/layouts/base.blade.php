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
              <li role="presentation"><a href="{{ env('APP_URL', '').'/registrousuario' }}">Registrarse</a></li>
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
    @if(Session::has('message'))
      <div class="alert alert-success alert-dismissible text-center" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
      </div>
    @endif

    @yield('contenido')



<!--Footer oscuro -->
    <div class="sub-footer">
    <div class="container">
      <div class="social-icon">
        <div class="col-md-4">
          <ul class="social-network">
            <li><a href="https://www.facebook.com/reparalo.ya.777/" class="fb tool-tip" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/reparaloya2020/" class="instagram tool-tip" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
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