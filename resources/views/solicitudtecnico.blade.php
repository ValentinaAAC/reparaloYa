<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>¡Repáralo Ya!</title>

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


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
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
                    <a href="formulario.html">
                        <i class="pe-7s-tools"></i>
                        <p>Solicita un tecnico</p>
                    </a>
                </li>

               <li class="">
                    <a href="chat.html">
                        <i class="pe-7s-chat"></i>
                        <p>Chat</p>
                    </a>
                </li>
                


                <li>
                    <a href="historial.html">
                        <i class="pe-7s-note2"></i>
                        <p>Historial</p>
                    </a>
                </li>


                


                 <li class="">
                    <a href="especialista.html">
                        <i class="pe-7s-user"></i>
                        <p>Perfil</p>
                    </a>
                </li>
               
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
                    <a class="navbar-brand" href="">Formulario de solicitud</a>

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
                                <li><a href="#">Contactar con un ejecutivo</a></li>
                                <li><a href="#">Reclamos</a></li>
                                <li><a href="#">Sugerencias</a></li>
                     
                              </ul>
                        </li>
                        <li>
                            <a href="index.html">
                                <p>Cerrar sesión</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>



                </div>


     <br> </br>

<form action="{{ route ('solicitudtecnico.store') }}" method="post">
      {{ csrf_field() }}
  <div class="form-group">
    <label for="solicitudtecnico">Nombre y apellido</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y apellido">
  </div>


  <div class="form-group">
    <label for="solicitudtecnico">Direccion</label>
    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Villa, calle casa">
  </div>

  <div class="form-group">
    <label for="solicitudtecnico">telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="+569********">
  </div>


        


  <div class="form-group">
    <label for="solicitudtecnico">Seleccione una categoria</label>
    <select class="form-control" name="servicio" id="servicio" placeholder="Servicio">
      <option>Seleccione una categoria</option>
      <option value="1">Computacion</option>
      <option>Acces Point</option>
      <option>Impresoras y Scanner</option>
      <option>Gasfiteria</option>
      <option>Servicio de electricidad</option>
      <option>Linea blanca</option>
      <option>Electro</option>
      <option>Climatizacion</option>
    </select>
  </div>
 
  <div class="form-group">
    <label  for="solicitudtecnico">Describa su problema</label>
    <textarea placeholder="Producto, modelo, marca y descripcion de la falla" class="form-control" name="problema" id="problema" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Enviar solicitud</button>
 </form>

            </div>
 

        </nav>


    </div>
</div>





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
