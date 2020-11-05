<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request->all());
    }


}
