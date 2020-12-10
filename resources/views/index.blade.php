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
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required" ><a href="{{ env('APP_URL', '').'/registrousuario' }}">{{ __('Solicitar un especialista') }}</a></button>
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
                <h2>Especialistas certificados ¡Aprovecha tu primera semana gratuita!</h2>
              </div>
            
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                <form class="form-inline">
                  <div class="form-group">
                    <button type="livedemo" name="purchase" class="btn btn-primary btn-lg" required="required"><a href="{{ env('APP_URL', '').'/registrocolaborador' }}">{{ __('Únete a nuestro equipo') }}</a></button>
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
        <p><em>Sabemos que la hora de buscar un especialista es un momento complicado por eso queremos llevar al hogar la mejor alternativa. ¡Te la llevamos a donde estés! Los mejores especialistas están en un mismo lugar. Ingresa tu dirección, y disfruta de la mejor atención a domicilio. ¡No te quedes con ganas! ¡Repáralo Ya!, te ayudamos en casa.</p>
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
</div>
<!-- nadbar inferior-->


<!--/nadbar inferior-->

@endsection
    





