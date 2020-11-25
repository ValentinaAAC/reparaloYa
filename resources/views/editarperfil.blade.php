@extends('layouts.basetrabajador')
@section('contenido')

<!--------------------------------------------------- Perfil------------------------------------------------------>
          <div class="container emp-profile">
          <form action="{{route('editarperfil.update')}}" method="PATCH">                    
                        <div class="row">
                        <div class="col-md-4">
                        <div class="profile-img">
                            <img src="/img/perfil.jpg" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Cambiar foto
                                <input type="file" name="file"/>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h1>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                    </h1>
                                    <h6>
                                        {{ Auth::user()->profesion }}
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Acerca de</a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       
                    <div class="content">

                    <form action="{{ route ('editarperfil.update') }}" method="post">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="editarperfil">Nombre y apellido</label>
                        <input type="text" class="form-control" name="name" id="nombre" value="{{ Auth::user()->name }}">
                    </div>


                    <div class="form-group">
                        <label for="editarperfil">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                    </div>

                    <div class="form-group">
                        <label for="editarperfil">telefono</label>
                        <input type="text" class="form-control" name="telephone" id="telefono" value="{{ Auth::user()->telephone }}">
                    </div>

                    <div class="form-group">
                        <label for="editarperfil">Profesion</label>
                        <input type="text" class="form-control" name="profesion" id="profesion" value="{{ Auth::user()->profesion }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>           
        </div>

@endsection


                  
