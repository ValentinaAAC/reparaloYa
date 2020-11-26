@extends('layouts.basetrabajador')
@section('contenido')

<script>
$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});
</script>
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
          <td>{{ $solicitud->nombre }}</td>
          <td>{{ $solicitud->direccion }}</td>
          <td>{{ $solicitud->telefono }}</td>
          <td>
            <input class="btn btn-success" type="submit" name="aceptar" value ="Aceptar" />
          </td>
          <td>
            <input type="button" class="borrar btn btn-danger" value="Eliminar" />
          </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>

@endsection