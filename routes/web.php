<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/solicitudtecnico', function () {
    return view('solicitudtecnico');
});

Route::get('/solicitudtecnico/index', 'SolicitudController@index')->name('solicitudtecnico.index');
Route::post('/solicitudtecnico/store', 'SolicitudController@store')->name('solicitudtecnico.store');

Route::get('/registrocolaborador/index', 'RegistroColabController@index')->name('registrocolaborador.index');
Route::post('/registrocolaborador/store', 'RegistroColabController@store')->name('registrocolaborador.store');

Route::get('/registrocolaborador', function () {
    return view('registrocolaborador');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/historial', function() {
    return view('historial');
});

Route::get('/chatusuario', function() {
    return view('chatusuario');
});

Route::get('/historialusuario', function() {
    return view('historialusuario');
});

Route::get('/trabajospublicados', function() {
    return view('trabajospublicados');
});

Route::get('/chatcolaborador', function() {
    return view('chatcolaborador');
});

Route::get('/registeruser', function() {
    return view('registeruser');
});

Route::get('/usuario', function() {
    return view('usuario');
});

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


