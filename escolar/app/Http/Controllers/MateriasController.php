<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materias;

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
}
