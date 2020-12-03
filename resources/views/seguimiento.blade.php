@extends('layouts.basetrabajador')
@section('contenido')


<div class="content">
<div class="container-fluid">
<table class="table" action="historial" method="get">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Descripción del problema</th>
      <th scope="col">Nombre y Apellido</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
    </tr>
  </thead>
  @foreach($solicitud as $solicitud)
  <tbody>
    <tr>
    @if(Auth::user()->idServicios == $solicitud->idServicios)
          <td>{{ $solicitud->problema }}</td>
          <td>{{ $solicitud->nombre }}</td>
          <td>{{ $solicitud->direccion }}</td>
          <td>{{ $solicitud->telefono }}</td>
          <td>
            

          </td>
    @endif
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>

@endsection