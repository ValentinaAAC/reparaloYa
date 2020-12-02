@extends('layouts.baseadmin')
@section('contenido')



        <!-- nadbar/-->
        
        <a class="navbar-brand" href="#">Reclamos y sugerencias</a>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"></h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                       	<th>Descripción</th>
                                        <th>Nombre y apellido</th>
                                        <th>Tipo de Usuario</th>
                                    </thead>
                                    
                                    @foreach($reclamos as $reclamos)
                                    <tbody>  
                                        <tr>
                                            <td>{{ $reclamos->id }}</td>
                                        	<td>{{ $reclamos->descripcion }}</td>
                                            <td>{{ $reclamos->name }}</td>
                                            <td>{{ $reclamos->role }}</td>
                                            <td>
                                            <form method="post" action="{!! action('ReclamosController@destroy', $reclamos->id) !!}" class="pull-left">
                                            {!! csrf_field() !!}
                                                <div>
                                                    <button type="submit" onclick="return confirm('¿Desea eliminar reclamo/sugerencia?')" class="btn btn-danger">Eliminar</button>
                                                </div>
                                            </form>
                                            </td>
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
        </div>

    </div>
</div>

@endsection