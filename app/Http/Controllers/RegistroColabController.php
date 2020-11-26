<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroColab;
use Illuminate\Support\Facades\Hash;

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
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->telephone = $request->telephone;
        $users->profesion = $request->profesion;
        $users->image = $request->image;
        $users->save();

        Session::flash('message','¡Te has registrado con éxito!');
        return Redirect::to('/index');
        

    }

    public function listado()
    {
       
        $users = RegistroColab::all();
        return view('controlcolab')->with(compact('users'));
    }

    public function destroy($id)
    {
        $users=RegistroColab::findOrFail($id);
        $users->delete();
        return Redirect::to('/controlcolab');
    }
    
}
