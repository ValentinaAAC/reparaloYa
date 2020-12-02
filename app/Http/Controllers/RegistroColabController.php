<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroColab;
use Illuminate\Support\Facades\Hash;
use App\Servicios;

Use Session;
Use Redirect;
Use DB;

class RegistroColabController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('registrocolaborador'); 
    }

    public function store(Request $request)
    {
        $users = new RegistroColab();
        $users->role = "colaborador";
        $users->name = $request->name;
        $users->rut = $request->rut;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->telephone = $request->telephone;
        $users->idServicios = $request->servicio;
        $users->image = $request->image;
        $users->save();

        Session::flash('message','¡Te has registrado con éxito!');
        return Redirect::to('/index');
        

    }

    public function listado()
    {
        $users = DB::table('users')
        ->join('servicios','users.idServicios','=','servicios.idServicios')
        ->select('users.*','servicios.nombre')
        ->get();
        $servicios = Servicios::all();
        return view('controlcolab',compact('users','servicios'));
    }

    public function destroy($id)
    {
        $users=RegistroColab::findOrFail($id);
        $users->delete();
        return Redirect::to('/controlcolab');
    }
    
}
