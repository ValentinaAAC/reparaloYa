<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroColab;
use Illuminate\Support\Facades\Hash;

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
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->telephone = $request->telephone;
        $users->profesion = $request->profesion;
        $users->image = $request->image;
        $users->save();
        return redirect('/index');
        

    }
    
}
