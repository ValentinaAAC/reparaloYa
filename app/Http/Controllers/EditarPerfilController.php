<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroColab;
use App\Http\Controllers\Auth;

class EditarPerfilController extends Controller
{
 
    public function update(Request $request){
        //$users = RegistroColab::find(Auth::User()->id);
        $users = RegistroColab::where('id','=',$request->id)->firstOrFail();
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
