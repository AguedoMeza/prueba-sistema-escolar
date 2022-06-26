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

    public function index()
    {
        $alumnos = alumnos::get();
        return view('admin.alumnos.index',compact('alumnos'));
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

    public function verAlumnosMaterias()
    {
        $post = alumnos::find(1);  
        return $post->alumnos_materias;
    }

    public function create()
    {
        $alumnos = alumnos::get();
        return view('admin.alumnos.create',compact('alumnos'));
    }

    public function store(Request $request)
    {
        $alumno = alumnos::create([
            'clave' => $request->clave,
            'nombre_completo' => $request->nombre,
            'edad' => $request->edad,
            'correo' => $request->correo,
            'calle' => $request->calle,
            'numero' => $request->numero
        ]);

        return redirect()->route('alumnos');
    }
}
