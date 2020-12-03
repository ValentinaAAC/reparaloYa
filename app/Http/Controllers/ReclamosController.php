<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reclamos;
use App\RegistroColab;

Use Session;
Use Redirect;
Use DB;
Use Auth;
Use User;

class ReclamosController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ayuda'); 
    }

    public function indexColab()
    {
        return view('ayudacolab'); 
    }

    public function store(Request $request)
    {
        $reclamos = new Reclamos();
        $reclamos->descripcion = $request->descripcion;
        $reclamos['user_id'] = Auth::user()->id;
        $reclamos->save();
        Session::flash('message','¡Se ha mandado tu reclamo/sugerencia con éxito!');
        return Redirect::to('/ayuda');
    }

    public function storeColab(Request $request)
    {
        $reclamos = new Reclamos();
        $reclamos->descripcion = $request->descripcion;
        $reclamos['user_id'] = Auth::user()->id;
        $reclamos->save();
        Session::flash('message','¡Se ha mandado tu reclamo/sugerencia con éxito!');
        return Redirect::to('/ayudacolab');
    }

    public function listado()
    {
       
        $reclamos = DB::table('reclamos')
        ->join('users','reclamos.user_id','=','users.id')
        ->select('reclamos.*','users.role','users.name')
        ->get();
        $users = RegistroColab::all();
        return view('reclamos',compact('reclamos','users'));
    }

    public function destroy($id)
    {
        $reclamos=Reclamos::findOrFail($id);
        $reclamos->delete();
        return Redirect::to('/reclamos');
    }

}
