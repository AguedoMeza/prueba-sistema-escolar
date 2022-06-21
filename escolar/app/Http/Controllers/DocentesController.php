<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docentes;

class DocentesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest');
    }
	
    public function index()
    {
		$docentes = Docentes::get();	
        return view('admin.docentes.index',compact('docentes'));
    }
}
