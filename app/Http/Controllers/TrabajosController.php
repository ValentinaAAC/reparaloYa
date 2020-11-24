<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;

class TrabajosController extends Controller
{
    public function listado()
    {
        $solicitud = Solicitud::all();
        return view('trabajospublicados')->with(compact('solicitud'));
    }
}
