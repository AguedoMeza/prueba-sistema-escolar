<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estados;
use App\Municipios;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
	
	public function getMunicipios(Request $request){
        if($request->ajax()){
            $data = $request->all();
            $idEstado = $data['id'];
            $municipios = Municipios::where('idEstado', $idEstado)->orderBy('Nombre','ASC')->get()->toArray();

            echo json_encode($municipios);
        }
    }
}
