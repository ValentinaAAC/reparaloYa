@extends('layouts.baseusuario')
@section('contenido')

<!--------------------------------------------------- Perfil------------------------------------------------------>
          <div class="container emp-profile">                  
                        <div class="row">
                        <div class="col-md-4">
                        <div class="profile-img">
                            <img src="/img/perfilusuario.jpg" alt=""/>
                            
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h1><strong> {{ Auth::user()->name }}</strong></h1>
                                    <h6>
                                       
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <h6><strong>Acerca de</strong></h6>
                                </li>
                               
                            </ul>
                        </div>
              
                    <div class="col-md-12">
                       
                    <div class="content">
                    

                    <form action="{{ route ( 'editarperfilusu.update' ) }}" method="POST">
                        @method('PATCH')
                        {{ csrf_field() }}
                        
                    <div class="form-group">
                        <label for="editarperfilusu">Nombre y apellido</label>
                        <input type="text" class="form-control" name="name" id="nombre" value="{{ Auth::user()->name }}">
                    </div>


                    <div class="form-group">
                        <label for="editarperfilusu">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                    </div>

                    <div class="form-group">
                        <label for="editarperfilusu">Teléfono</label>
                        <input type="text" class="form-control" name="telephone" id="telephone" value="{{ Auth::user()->telephone }}">
                    </div>
                    </br>
                    <button type="submit"  class="btn btn-primary float-right col-md-3">Actualizar</button>
                  
            </form>           
        </div>

@endsection


                  
