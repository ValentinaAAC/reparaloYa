<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\Servicios;


Use DB;
Use Log;
Use Redirect;
Use Auth;

class TrabajosController extends Controller
{
    public function listado()
    {
        $solicitud = DB::table('solicitud')
        ->join('servicios','solicitud.idServicios','=','servicios.idServicios')
        ->join('estados','solicitud.idSolicitud','=','estados.idSolicitud')
        ->select('solicitud.*','servicios.categoria','estados.*')
        ->get();
        $servicios = Servicios::all();
        return view('trabajospublicados',compact('solicitud','servicios'));
    }

    public function listadoSegui()
    {
        $solicitud = DB::table('solicitud')
        ->join('servicios','solicitud.idServicios','=','servicios.idServicios')
        ->select('solicitud.*','servicios.categoria')
        ->get();
        $servicios = Servicios::all();
        return view('seguimiento',compact('solicitud','servicios'));
        
    }

    public function actualizarEst($id, $estado)
    {
        if($estado="Aceptar"){
            Log::debug($id."->".$estado);
            $estado=DB::table('estados')->where('user_id',Auth::user()->id)->where('idSolicitud',$id)->update(array('estado' => 'Aceptada'));
            DB::table('estados')->where('user_id', '!=' , Auth::user()->id)->delete();
        }else{
           Log::debug($id."->".$estado);
           $estado=DB::table('estados')->where('user_id',Auth::user()->id)->where('idSolicitud',$id)->update(array('estado' => 'Rechazada'));
           
        }
        return Redirect::to('/trabajospublicados');
    }
  
}
