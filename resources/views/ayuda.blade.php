@extends('layouts.baseusuario')
@section('contenido')


<div class="content">
        </br>
        </br>
        <form action="{{ route ('ayuda.store') }}" method="post">
            {{ csrf_field() }}
        <div class="form-group">
            <label  for="ayuda">Escribe aquí tu reclamo o sugerencia: </label>
            <textarea placeholder="Escribe aquí tu reclamo o sugerencia" class="form-control" name="descripcion" id="descripcion" rows="7"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    
</div>
         
@endsection




