<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

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
        Session::flash('message','¡Tu solicitud se ha enviado con éxito!');
        return Redirect::to('/solicitudtecnico');

    }


}
