<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroUsu;
use App\editarperfilusu;
use App\Http\Controllers\Auth;
use App\User;

class EditarPerfilUsuController extends Controller
{


      public function edit(User $users)
    {
       return view ('editarperfilusu.edit',[
          'editarperfilusu'->$users

       ]);
    }


    public function update(Request $request)
   {  
      $id = auth()->user()->id;
      $users = User::findOrFail($id);
      $users->update([
         'name'=>$request['name'],
         'email'=>$request['email'],
         'telephone'=>$request['telephone'],
      ]);

      return redirect()->route('usuario', $users);
        
   }
}