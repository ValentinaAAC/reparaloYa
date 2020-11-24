@extends('layouts.basetrabajador')
@section('contenido')

<div class="content">
<div class="container-fluid">
<table class="table">
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
      <td><button type="button" class="btn btn-success">Aceptar</button></td>
      <td><button type="button" class="btn btn-danger">Rechazar</button></td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>

@endsection