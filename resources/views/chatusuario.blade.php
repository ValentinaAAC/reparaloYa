@extends('layouts.baseusuario')
@section('contenido')

<div class="container">
    <chat-component :user="{{ auth()->user() }}"></chat-component>
    
</div>

@endsection