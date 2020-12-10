<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\USer;
use App\Estado;

Use Session;
Use Redirect;

class SolicitudController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('solicitudtecnico'); 
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $solicitud = new Solicitud();
        $solicitud->nombre = $request->nombre;
        $solicitud->direccion = $request->direccion;
        $solicitud->telefono = $request->telefono;
        $solicitud->idServicios = $request->servicio;
        $solicitud->problema = $request->problema;
        $solicitud->save();
        $users=User::all()->where('role','colaborador')->where('idServicios',$solicitud->idServicios);
        foreach($users as $user){
            $estado = new Estado();
            $estado->idSolicitud=$solicitud->id;
            $estado->user_id=$user->id;
            $estado->estado="pendiente";
            $estado->save();  
        }
        Session::flash('message','¡Tu solicitud se ha enviado con éxito!');
        return Redirect::to('/solicitudtecnico');

    }


}
