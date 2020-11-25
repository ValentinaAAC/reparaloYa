@extends('layouts.baseadmin')
@section('contenido')

<a class="navbar-brand" href="#">Colaboradores registrados</a>
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
                                        <th>Teléfono</th>
                                        <th>Profesión o especialidad</th>
                                        <th>Correo electrónico</th>

                                    </thead>
                                    @foreach($users as $users)
                                    @if($users->role=="colaborador")
                                    <tbody>  
                                        <tr>
                                            <td>{{ $users->id }}</td>
                                        	<td>{{ $users->name }}</td>
                                            <td>{{ $users->telephone }}</td>
                                            <td>{{ $users->profesion }}</td>
                                        	<td>{{ $users->email }}</td>
                                            <td><button type="button" class="btn btn-success">Activar</button></td>
                                            <td><button type="button" class="btn btn-primary">Pago recibido</button></td>
                                            <td> <button type="button" class="btn btn-warning">Pausar</button></td>
                                            <td>
                                            <form method="POST" action="{{ url('controlcolab/{$users->id}') }}">
                                            @csrf
                                            @method('DELETE')
                                            
                                            <button type="submit"  class="btn btn-danger">Eliminar</button>
                                            </form>
                                            </td>
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


@endsection