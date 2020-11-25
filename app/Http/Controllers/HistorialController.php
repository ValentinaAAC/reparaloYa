<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class HistorialController extends Controller
{
    public function listado()
    {
        $solicitud = Solicitud::all();
        return view('historialusuario')->with(compact('solicitud'));
    }
}
