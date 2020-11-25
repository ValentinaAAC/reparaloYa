@extends('layouts.baseadmin')
@section('contenido')



        <!-- nadbar/-->
        <a class="navbar-brand" href="#">Usuarios registrados</a>
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
                                    	<th>Nombre y apellido</th>
                                    	<th>Correo electrónico</th>
                                    	<th>Teléfono</th>
                                    </thead>
                                    
                                    @foreach($users as $users)
                                    @if($users->role=="usuario")
                                    <tbody>  
                                        <tr>
                                            <td>{{ $users->id }}</td>
                                        	<td>{{ $users->name }}</td>
                                            <td>{{ $users->email }}</td>
                                            <td>{{ $users->telephone }}</td>
                                            <td><button type="button" class="btn btn-success">Activar</button></td>
                                            <td><button type="button" class="btn btn-danger">Suspender</button></td>
                                        </tr>
                                    </tbody>
                                    @endif
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