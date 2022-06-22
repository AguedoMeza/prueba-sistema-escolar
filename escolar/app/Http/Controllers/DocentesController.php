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
    }
}
