<?php

namespace App\Http\Controllers;
use App\Alumnos;

use Illuminate\Http\Request;

class Alumnos extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }

    public function index()
    {
		$inmuebles = Inmueble::get();	
        return view('admin.inmueble.index',compact('inmuebles'));
    }
}
