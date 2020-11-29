<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Servicios;


Use DB;


class TrabajosController extends Controller
{
    public function listado()
    {
        $solicitud = DB::table('solicitud')
        ->join('servicios','solicitud.idServicios','=','servicios.idServicios')
        ->select('solicitud.*','servicios.nombre')
        ->get();
        $servicios = Servicios::all();
        return view('trabajospublicados',compact('solicitud','servicios'));
        
    }
  
}
