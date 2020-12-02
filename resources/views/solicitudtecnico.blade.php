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
    <select class="form-control" name="servicio" id="servicio" placeholder="Servicio" required>
      <option value="">Seleccione una categoría</option>
      <option value="1">Computación</option>
      <option value="2">Acces Point</option>
      <option value="3">Impresoras y Scanner</option>
      <option value="4">Gasfitería</option>
      <option value="5">Servicio de electricidad</option>
      <option value="6">Línea blanca</option>
      <option value="7">Electro</option>
      <option value="8">Climatización</option>
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




