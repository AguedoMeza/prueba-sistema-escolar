<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materias;
use App\alumnos;

class AlumnosController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function asignarMateria()
    {
        $post = alumnos::find(1);  

        $materia = materias::create([
            'nombre' => "estructura de datos",
            'inicioSemestre' => "2022-06-22",
            'finSemestre' => "2022-06-22",
            'creditos' => 10
        ]);
        
        $post->alumnos_materias()->save($materia);
    }
}
