<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title> ¡Repáralo Ya!</title>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand text-white" href="#">
        <img src="images/logo.png" width="60" height="60" class="d-inline-block align-top ml-4" alt="" loading="lazy"></a>
      <a class="nav-link text-white" href="#"><h1>¡Repáralo Ya!</h1></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item">
            <a class="nav-link h5 text-white" href="#">Quiénes somos</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link h5 text-white" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link h5 text-white" href="registrartrabajador.html">Únete a nuestro equipo</a>
          </li>
          <li class="nav-item ml-3">
            <a class="nav-link h5 text-white" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
          </li>
        </ul>
      </div>
    </nav>
   
    <!--Contenido -->
    @yield('content')




    <footer class="bd-footer text-muted bg-info">
      <div class="container-fluid p-3 p-md-5">
        <h5 class="text-white font-weight-bold">Nuestro proyecto</h5>
        <p class="text-white text-lighten-4">Somos un equipo de estudiantes universitarios que trabajamos en este proyecto como si fuera nuestro trabajo de tiempo completo. </p> 
        <div class="text-center mt-6">
          <a href="https://www.instagram.com/" target="_blank"><img src="images/insta.png" width="40" height="40" class="d-inline-block align-top ml-4" alt="" loading="lazy"></a>
          <a href="https://www.facebook.com/" target="_blank"><img src="images/face.png" width="40" height="40" class="d-inline-block align-top ml-4" alt="" loading="lazy"></a>
          <a href="https://twitter.com/explore" target="_blank"><img src="images/twitter.png" width="40" height="40" class="d-inline-block align-top ml-4" alt="" loading="lazy"></a>
        </div>  
      </div>
    </footer> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>