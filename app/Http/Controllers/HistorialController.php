<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Servicios;

Use DB;

class HistorialController extends Controller
{
    public function listado()
    {
        $solicitud = DB::table('solicitud')
        ->join('servicios','solicitud.idServicios','=','servicios.idServicios')
        ->join('estados','solicitud.idSolicitud','=','estados.idSolicitud')
        ->select('solicitud.*','servicios.nombre','estados.*')
        ->get();
        $servicios = Servicios::all();
        return view('historialusuario',compact('solicitud','servicios',));
       
    }
}
