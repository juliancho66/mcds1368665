<?php
use Illuminate\Http\Requests;

use App\Http\RegionRequest;
use App\Http\Controllers\RegionController;
namespace App\Http\Controllers;
use App\Region;
use App\Municipio;



class RegionController extends Controller
{
	public function index()
    {
   
        $regiones = Region::pluck('nombre','id_region');
        return view('regiones.index', compact('regiones'));

        
    }
    public function getMunicipios(Request $Request, $id_municipio){
    	if($request->ajax ()){
    	    $municipios = Municipio::municipios($id_municipio);
    		return response()->json($municipios);

    	}


    }
	
}


