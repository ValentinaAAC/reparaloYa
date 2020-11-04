@extends('layouts.base')

@section('content')

<img src="images/uno.jpg" width="100%" alt="Unsplashed fondo img 1">
    <br></br>
    <br></br>
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto col-md-4 order-md-2">
          <img src="images/logogrande2.png">
        </div>
        <div class="col-md-8 order-md-1 text-center text-md-left pr-md-5">
          <h1 class="mb-3 font-weight-bold">Delivery que repara en tu hogar</h1>
          <p class="lead mb-4">
            Sabemos que a la hora de buscar un especialista, en ocasiones, puede resultar complicado. Por eso queremos llevar al hogar la mejor alternativa. ¡Te la llevamos a donde estés! Los mejores especialistas están en un mismo lugar. Rellena un formulario sencillo explicando tu problema y disfruta de la mejor atención a domicilio. ¡No te quedes con las dudas! 
            <p class="lead mb-4">¡Repáralo Ya!, te ayuda en casa.</p>
          </p>
          <div class="d-flex flex-column flex-md-row">
     
            <button type="button" class="btn btn-outline-danger mb-3" data-toggle="modal" data-target="#staticBackdrop">
              Reparar ahora
            </button>     
          </div>
        </div>
      </div>
    </div>
    <br></br>
    
    @endsection




