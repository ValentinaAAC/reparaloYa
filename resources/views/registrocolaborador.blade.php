@extends('layouts.app2')

@section('content')



<body background="/images/electro.jpg">

<br></br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de colaborador') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registrocolaborador.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="registrocolaborador" class="col-md-4 col-form-label text-md-right">{{ __('Nombre y Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="registrocolaborador" class="col-md-4 col-form-label text-md-right">{{ __('R.U.T.') }}</label>

                            <div class="col-md-6">
                                <input id="rut" type="text" class="form-control @error('rut') is-invalid @enderror" name="rut" value="{{ old('rut') }}" required autocomplete="name" autofocus>

                                @error('rut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                            

                        </div>

                        <div class="form-group row">
                            <label for="registrocolaborador" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="registrocolaborador" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="registrocolaborador" class="col-md-4 col-form-label text-md-right">{{ __('Área de trabajo') }}</label>
                            <div class="col-md-6">
                            <select class="form-control" name="servicio" id="servicio" placeholder="Servicio" required>
                            <option value="">Seleccione una categoría</option>
                            <option value="1">Computación</option>
                            <option value="2">Acces Point</option>
                            <option value="3">Impresoras y Scanner</option>
                            <option value="4">Gasfitería</option>
                            <option value="5">Servicio de electricidad</option>
                            <option value="6">Línea blanca</option>
                            <option value="7">Electro</option>
                            <option value="8">Climatización</option>
                            </select>
                            @error('servicio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            </div>  
                        </div>
                        




                        <div class="form-group row">
                            <label for="registrocolaborador" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                         <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                         </div> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
