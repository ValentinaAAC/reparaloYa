<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditarPerfilController extends Controller
{
    public function edit(){
        $users = User::find(Auth::User()->id);
        if(empty($users)){
           Flash::error('mensaje error');
           return redirect()->back();
        }
        return view('editarperfil')->with('users', $users);
     }
 
    public function update(Request $request){
        $users = User::find(Auth::User()->id);
        if(empty($users)){
           Flash::error('mensaje error');
           return redirect()->back();
        }
        $users->fill($request->all());
        $users->save();
        Flash::success('Perfil actualizado con éxito.');
        return redirect(route('index'));
     }
}
