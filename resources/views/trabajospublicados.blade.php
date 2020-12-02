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
    @if(Auth::user()->idServicios == $solicitud->idServicios)
          <td>{{ $solicitud->idSolicitud }}</td>
          <td>{{ $solicitud->problema }}</td>
          <td>{{ $solicitud->categoria }}</td>
          <td>{{ $solicitud->nombre }}</td>
          <td>{{ $solicitud->direccion }}</td>
          <td>{{ $solicitud->telefono }}</td>
          <td>
            <button class="btn btn-info" type="submit" name="aceptar" value ="Aceptar" >
            <a href="{{ env('APP_URL', '').'/chatcolaborador' }}">{{ __('Aceptar') }}</a>
            <input class="hidden" type="button" class="borrar btn btn-danger" />
            </button>
          </td>
    @endif
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>

@endsection