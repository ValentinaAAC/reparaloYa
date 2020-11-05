@extends('layouts.base')
@section('contenido')


<!--Contenido-->
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

@endsection
    





