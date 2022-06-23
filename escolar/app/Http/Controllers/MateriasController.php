<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materias;

class MateriasController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }
	
    public function index()
    {
		$materias = materias::get();	
        return view('admin.materias.index',compact('materias'));
        //return $materias;
    }

    public function store()
    {
        $materia = materias::create([
            'nombre' => 'fisica',
            'inicioSemestre' => "2022-06-22",
            'finSemestre' => "2022-06-22",
            'creditos' => 10
        ]);
    }
}
