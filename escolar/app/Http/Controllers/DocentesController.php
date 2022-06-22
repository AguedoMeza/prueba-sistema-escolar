<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\docentes;

class DocentesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }
	
    public function index()
    {
		$docentes = docentes::get();	
         return view('admin.docentes.index',compact('docentes'));
        //$test = $docentes[0]['telefonos']['number'];
        //return $test;
    }

    public function create()
    {
        $docentes = docentes::get();	
        return view('admin.docentes.create',compact('docentes'));
    }

    public function store(Request $request)
    {
        $d = new Docentes;
        $d->clave = $request->clave;
        $d->nombre = $request->nombre;
        $d->ap_paterno = $request->ap_paterno;
        $d->ap_materno = $request->ap_materno;
        $d->contrato = $request->contrato;
        $d->save();
		
		$totalTelefonos = $request->totCaracteristicas;

        return json_encode($totalTelefonos);
		
    }
}
