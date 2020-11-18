@extends('layouts.baseusuario')
@section('contenido')


<div class="content">
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
         
@endsection




