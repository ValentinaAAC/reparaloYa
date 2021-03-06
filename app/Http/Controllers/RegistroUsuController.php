<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroUsu;
use Illuminate\Support\Facades\Hash;

Use Session;
Use Redirect;

class RegistroUsuController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('registrousuario'); 
    }

    public function store(Request $request)
    {
        $users = new RegistroUsu();
        $users->role = "usuario";
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
        $users = RegistroUsu::all();
        return view('controlusu')->with(compact('users'));
    }

    public function destroy($id)
    {
        $users=RegistroUsu::findOrFail($id);
        $users->delete();
        return Redirect::to('/controlusu');
    }
}
