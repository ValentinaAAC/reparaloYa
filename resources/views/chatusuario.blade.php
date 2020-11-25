@extends('layouts.baseusuario')
@section('contenido')

<div class="container mt-3 my-3">
        
    <div class="row">
        <div class="col-md-3">
            @livewire("chat-form")
        </div>
        <div class="col-md-3">
            @livewire("chat-list")
        </div>
    </div>
    
</div>

@endsection