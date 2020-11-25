@extends('layouts.basetrabajador')
@section('contenido')

<div class="content">
<div class="container-fluid">
<table class="table" action="historial" method="get">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nº </th>
      <th scope="col">Descripción del problema</th>
      <th scope="col">Categoría</th>
      <th scope="col">Nombre y Apellido</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
    </tr>
  </thead>
  @foreach($solicitud as $solicitud)
  <tbody>
    <tr>
      <td>{{ $solicitud->idSolicitud }}</td>
          <td>{{ $solicitud->problema }}</td>
          <td>{{ $solicitud->idServicios }}</td>
          <td>{{ $solicitud->nombre }}</td>
          <td>{{ $solicitud->direccion }}</td>
          <td>{{ $solicitud->telefono }}</td>
          <td>
          <form name="delete" method="DELETE" action="delete">
            {{ csrf_field() }}
            <input class="btn btn-success" type="submit" name="aceptar" value ="Aceptar">
          </td>
          <td>
            <input type="hidden" name="idSolicitud" value="{{ $solicitud->idSolicitud }}">
            <button class="btn btn-danger" type="submit">Rechazar</button>
          </form>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>

@endsection