@extends('layouts.baseusuario')
@section('contenido')

<div class="container emp-profile">
                <form method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                        <div class="profile-img">
                            <img src="/img/perfilusuario.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                <h1><strong> {{ Auth::user()->name }}</strong></h1>
                                    
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <h6><strong>Acerca de</strong></h6>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!-- boton editar perfil-->
                        <button type="button" class="btn btn-primary">
                        <a href="{{ env('APP_URL', '').'/editarperfilusu' }}">Editar perfil </a>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       
                    </div>
                    <div class="col-md-8">
                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telefono</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->telephone }}</p>
                                            </div>
                                        </div>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>




@endsection