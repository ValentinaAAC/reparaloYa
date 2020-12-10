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
      <th scope="col">Estado de solicitud</th>
    </tr>
  </thead>
  @foreach($solicitud as $solicitud)
  <tbody>
    <tr>
          @if(Auth::user()->idServicios == $solicitud->idServicios and Auth::user()->id==$solicitud->user_id)
          <td>{{ $solicitud->idSolicitud }}</td>
          <td>{{ $solicitud->problema }}</td>
          <td>{{ $solicitud->categoria }}</td>
          <td>{{ $solicitud->nombre }}</td>
          <td>{{ $solicitud->direccion }}</td>
          <td>{{ $solicitud->telefono }}</td>
          <td>{{ $solicitud->estado }}</td>
          @if($solicitud->estado=="pendiente")
            <td>
            <button type="submit" class="btn btn-success" name="aceptar" value="Aceptar" onClick="">
            <a href="{{ action('TrabajosController@actualizarEst', [$solicitud->idSolicitud, 'aceptar']) }}" style="color:#198754;">Aceptar</a>
            </button>
            </td>
            <td> 
            <button type="submit" class="btn btn-danger" name="rechazar" value="Rechazar" onClick="">
            <a href="" style="color:#FF0000;">Rechazar</a>
            </button>
            </td>
          @else
            <td></td>
            <td></td>
            <td>
            <a href="https://api.whatsapp.com/send?phone=[+56][{{$solicitud->telefono}}]&text=Hola,%20hablo%20con%20{{$solicitud->nombre}}?%20Me%20comunico%20con%20usted%20por%20su%20problema:%20<<{{$solicitud->problema}}>>." target="_blank"> 
            <img class="alignnone wp-image-2180 ls-is-cached lazyloaded" src="https://sherpadigital.es/wp-content/uploads/2017/10/whatsapp-icon-150x150.png" data-src="https://sherpadigital.es/wp-content/uploads/2017/10/whatsapp-icon-150x150.png" alt="" data-srcset="https://i2.wp.com/sherpadigital.es/wp-content/uploads/2017/10/whatsapp-icon.png?zoom=2&amp;resize=97%2C107&amp;ssl=1 194w, https://i2.wp.com/sherpadigital.es/wp-content/uploads/2017/10/whatsapp-icon.png?zoom=3&amp;resize=97%2C107&amp;ssl=1 291w" sizes="(max-width: 77px) 100vw, 97px" srcset="https://i2.wp.com/sherpadigital.es/wp-content/uploads/2017/10/whatsapp-icon.png?zoom=2&amp;resize=97%2C107&amp;ssl=1 194w, https://i2.wp.com/sherpadigital.es/wp-content/uploads/2017/10/whatsapp-icon.png?zoom=3&amp;resize=97%2C107&amp;ssl=1 291w" width="47" height="47">
            </a>
          </td>
          @endif
          <td></td>
          
        
    @endif
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>

@endsection