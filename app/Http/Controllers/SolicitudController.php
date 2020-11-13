<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

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
        $solicitud->idServicios = $request->servicio;
        $solicitud->problema = $request->problema;
        $solicitud->save();
        return view('solicitudtecnico');

    }


}
