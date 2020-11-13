<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <!--headre area start-->
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand text-white" href="#">
      <img src="images/logo.png" width="60" height="60" class="d-inline-block align-top ml-4" alt="" loading="lazy"></a>
      <a class="nav-link text-white" href="#"><h1>¡Repáralo Ya!</h1></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="navbar-nav ml-md-auto">

        </ul>
      </div>
    </nav>
    <!--headre area end-->
    <!--sidebar comienza-->
    <div class="sidebar">
     <center>
      <img src="Alex.png" class="profile_image" alt>
      <h4>Alex</h4>
    </center>
    <a href="solicitudtecnico.html"><i class="fas fa-desktop"></i><span>Solicitar Tecnico</span></a>
    <a href="chatcliente.html"><i class="fas fa-comments"></i><span>Chat Activo</span></a>
    <a href="historialcliente.html"><i class="fas fa-table"></i><span>Historial de solicitudes</span></a>
    <a href="perfilcliente.html"><i class="fas fa-users-cog"></i><span>Perfil</span></a>
    <a href=""><i class="fas fa-sign-out-alt"></i><span>Cerrar Sesion</span></a>

  </div>
  <!--sidebar termina-->
  <!-- Page Content -->



  <div class="content">
    <div class="abs-center">
      <form action="{{ route ('solicitudtecnico.store') }}" method="post">
      {{ csrf_field() }}
       <h1>Generar solicitud de tecnico</h1>
       <label>Complete los datos del siguiente formulario.</label>
       <div class="form-group">
          <label for="solicitudtecnico">Nombre y apellido</label>
            <div class="col-sm-10"> 
          <input type="text" class="col-sm-5 col-form-label" name="nombre" id="nombre" placeholder="Nombre y apellido">
       </div>
        <div class="form-group">
          <label for="solicitudtecnico">Ingrese su direccion</label>
            <div class="col-sm-10"> 
          <input type="text" class="col-sm-5 col-form-label" name="direccion" id="direccion" placeholder="Direccion">
       </div>
      <div class="form-group">
        <label for="solicitudtecnico">Seleccione area de servicio</label>
            <div class="col-sm-10">
          <select type="form-control" class="col-sm-2 col-form-label" name="servicio" id="servicio" placeholder="Servicio">
          <option value="1">Gasfiteria</option>
          <option value="2">Electricidad</option>
          <option value="3">Refrigeracion</option>
          <option value="4">Computacion</option>
          <option value="5">Linea Blanca</option>
        </select>
      </div>
      <div class="form-group">
          <label for="solicitudtecnico">Describa el problema</label>
          <div class="col-sm-10">
          <input type="text" class="col-sm-10 col-form-label" name="problema" id="problema" placeholder="Escriba aquí">
       </div>
      <br></br>
      <button type="submit" class="btn btn-success">Enviar solicitud</button>
    </form>
    
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>