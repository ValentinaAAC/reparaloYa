
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <title>¡Repáralo Ya!</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">

          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <div class="navbar-brand">
            <a href="{{ url('/index') }}"><h1>¡Repáralo Ya!</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index.html" class="active">Home</a></li>
                <li role="presentation"><a href="Servicios.html">Servicios</a></li>
                <li role="presentation"><a href="">Nosotros</a></li>
              <li role="presentation"><a href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a></li>
              <li role="presentation"><a href="{{ route('register') }}">{{ __('Únete a nuestro equipo') }}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>



<!--Slaider-->
  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="img/slide.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span>Los mejores profesionales a la puerta de tu casa</span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                
                </div>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="Live Demo" class="btn btn-primary btn-lg" required="required" ><a href="{{ route('register') }}">{{ __('Solicitar un especialista') }}</a></button>
                  </div>
                  <div class="form-group">
           
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="img/slide2.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>Especialistas certificados</h2>
              </div>
            
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required"><a href="{{ route('register') }}">{{ __('Únete a nuestro equipo') }}</a></button>
                  </div>
          
                </form>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="img/slide3.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2>Soluciones a un solo Click</h2>
              </div>
        
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                <form class="form-inline">
                  <div class="form-group">
          
                  </div>
                  <div class="form-group">
                
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->


  <hr>

<!--Spam -->
  <section class="action">
    <div class="container">
      <div class="left-text hidden-xs">
        <h4>¡Repáralo Ya!</h4>
        <p><em>Sabemos que la hora de buscar un especialista es un momento complicado por eso queremos llevar al hogar la mejor alternativa. ¡Te la llevamos a donde estés! Los mejores especialistas están en un mismo lugar Ingresa tu dirección, y disfruta de la mejor atencion a domiciolio. ¡No te quedes con ganas! ¡Repáralo Ya!, te ayudamos en casa.</p>
      </div>
      
      <div class="right-image hidden-xs"></div>
    </div>
  </section>

 <!--/spam-->

  <div class="gallery">
    <div class="text-center">
      <h2></h2>
      <p><h4>"Nada como gestionar la visita de un especialista desde la comodidad de tu hogar"</h4></p>
    </div>
    
<!-- nadbar inferior-->
  <footer >  
    <div class="container-fluid">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>Ubicanos en:</h4>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Chillán, Chile </li>
            <li><i class="fa fa-phone fa"></i> +569 54869789</li>
            <li><i class="fa fa-envelope fa"></i> ReparaloYa@gmail.com.</li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="text-center">
          <h4>Nuestras áreas</h4>
          <ul class="sidebar-gallery">
            <li><a href="Servicios.html"><img src="img/index1.jpg" alt="" /></a></li>
            <li><a href="Servicios.html"><img src="img/torre.jpg" alt="" /></a></li>
            <li><a href="Servicios.html"><img src="img/red.jpg" alt="" /></a></li>
            <li><a href="Servicios.html"><img src="img/impresora.jpg" alt="" /></a></li>
            <li><a href="Servicios.html"><img src="img/laptop.jpg" alt="" /></a></li>
            <li><a href="Servicios.html"><img src="img/router.jpg" alt="" /></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="">
          <h4>¡No olvides registrarte! </h4>
          <p>¿Cuentas con tus certificaciones y estás sin empleo? ¡Únete a nuestro equipo!</p>
         
          <div class="btn-gamp">
            <a href="registrartrabajador.html" type="submit" class="btn btn-default">Registrarse</a>
          </div>

        </div>
      </div>

    </div>
  </footer>
<!--/nadbar inferior-->

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


    





