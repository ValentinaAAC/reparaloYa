@extends('layouts.baseusuario')
@section('contenido')

<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Historial de servicios contratados</h4>
                                <p class="category">Aquí encontrarás todos los detalles de tus servicios contratados</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Nº</th>
                                    	<th>Descripción del problema</th>
                                    	<th>Categoría</th>
                                    	<th>Dirección</th>
                                    	<th>Teléfono</th>
                                    </thead>

                                    @foreach($solicitud as $solicitud)
                                    <tbody>
                                        
                                        <tr>
                                            <td>{{ $solicitud->idSolicitud }}</td>
                                        	<td>{{ $solicitud->problema }}</td>
                                        	<td>{{ $solicitud->nombre }}</td>
                                        	<td>{{ $solicitud->direccion }}</td>
                                        	<td>{{ $solicitud->telefono }}</td>
                                        </tr>

                                    </tbody>
                                    @endforeach
                                    
                                    
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection