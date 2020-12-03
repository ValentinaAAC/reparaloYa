<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegistroColab;
use App\editarperfil;
use App\Http\Controllers\Auth;
use App\User;

class EditarPerfilController extends Controller
{


      public function edit(User $users)
    {
       return view ('editarperfil.edit',[
          'editarperfil'->$users

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

      return redirect()->route('home', $users);

   }
}
