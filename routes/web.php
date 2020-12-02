<?php

use Illuminate\Support\Facades\Route;
use App\Solicitud;
use App\RegistroColab;

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

Route::get('/registrocolaborador', function () {
    return view('registrocolaborador');
});

Route::get('/registrocolaborador/index', 'RegistroColabController@index')->name('registrocolaborador.index');
Route::post('/registrocolaborador/store', 'RegistroColabController@store')->name('registrocolaborador.store');

Route::get('/registrousuario', function () {
    return view('registrousuario');
});

Route::get('/registrousuario/index', 'RegistroUsuController@index')->name('registrousuario.index');
Route::post('/registrousuario/store', 'RegistroUsuController@store')->name('registrousuario.store');

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

Route::get('/usuario', 'UsuarioController@index')->name('usuario');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/editarperfil', function() {
    return view('editarperfil');
});
Route::get('/editarperfilusu', function() {
    return view('editarperfilusu');
});

Route::get('/editarperfil/edit', 'EditarPerfilController@edit')->name('editarperfil.edit');
Route::patch('/editarperfil/update', 'EditarPerfilController@update')->name('editarperfil.update');
Route::get('/editarperfilusu/edit', 'EditarPerfilUsuController@edit')->name('editarperfilusu.edit');
Route::patch('/editarperfilusu/update', 'EditarPerfilUsuController@update')->name('editarperfilusu.update');


Auth::routes();

Route::get('historialusuario', 'HistorialController@listado');

Route::get('trabajospublicados', 'TrabajosController@listado');


Route::get('/admin', function() {
    return view('admin');
});


Route::get('/controlusu', function() {
    return view('controlusu');
});

Route::get('/controlpago', function() {
    return view('controlpago');
});

Route::get('/controlcolab', function() {
    return view('controlcolab');
});

Route::get('controlusu', 'RegistroUsuController@listado');
Route::get('controlcolab', 'RegistroColabController@listado');

Route::post('controlcolab/{id}', 'RegistroColabController@destroy')->name('controlcolab.destroy');
Route::post('controlusu/{id}', 'RegistroUsuController@destroy')->name('controlusu.destroy');

Route::get('/ayuda',function(){
    return view('ayuda');
});
Route::get('/ayuda/index', 'ReclamosController@index')->name('ayuda.index');
Route::post('/ayuda/store', 'ReclamosController@store')->name('ayuda.store');


Route::get('/ayudacolab',function(){
    return view('ayudacolab');
});
Route::get('/ayudacolab/index', 'ReclamosColabController@index')->name('ayudacolab.index');
Route::post('/ayudacolab/store', 'ReclamosColabController@store')->name('ayudacolab.store');

Route::get('/reclamos',function(){
    return view('reclamos');
});

Route::get('reclamos', 'ReclamosController@listado');
Route::post('reclamos/{id}', 'ReclamosController@destroy')->name('reclamos.destroy');

Route::get('/chatusuario', 'ChatController@index');
Route::get('/messages', 'ChatController@fetchAllMessages');
Route::post('/messages', 'ChatController@sendMessage');