<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\docentes;
use App\materias;

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
        //$test = $docentes[0]['telefonos'];
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
       
		
		$totalTelefonos = $request->totCaracteristicas;
        $telefonos = array();

        for($i=1;$i<=$totalTelefonos;$i++){
			if($request['inputC'.$i] != NULL){
                $r = $request['inputC'.$i];
                $telefonos[] = array('telefono'.$i => "$r");
			}
		}
        $json = json_encode($telefonos);

        $d->telefonos = json_decode($json);

        $d->save();

        


        return $json;
		
    }

    public function asignarMateria()
    {
        $post = docentes::find(1);  

        $materia = materias::create([
            'nombre' => "algoritmia",
            'inicioSemestre' => "2022-06-22",
            'finSemestre' => "2022-06-22",
            'creditos' => 10
        ]);
        
        $post->docentes_materias()->save($materia);
    }
}
