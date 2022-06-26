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
        $materias = materias::get();
        return view('admin.docentes.create',compact('docentes','materias'));
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

        //Almacenar relacion polimorfica de materia
        $docenteObtenido = docentes::find($d->id);  
        $materiaObtenida = materias::find($request->materiaSeleccionada);
        $docenteObtenido->docentes_materias()->save($materiaObtenida);

        


        //return $json;
        return redirect()->route('docentes');
		
    }

    public function asignarMateria() //test
    {
        $post = docentes::find(2);  
        $materia = materias::find(2); 

        //$materia = materias::create([
        //    'nombre' => "algoritmia",
        //    'inicioSemestre' => "2022-06-22",
        //    'finSemestre' => "2022-06-22",
        //    'creditos' => 10
        //]);
        
        $post->docentes_materias()->save($materia);
    }

    public function verDocentesMaterias(Request $request)
    {
        $idDocente = $request->idDocente;
        $post = docentes::find($idDocente);  
        return $post->docentes_materias;
    }

    public function test() //test
    {
        $post = docentes::find(1);  
        return dd($post);
    }
}
