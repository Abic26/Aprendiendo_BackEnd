<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pagAndresDatos;

class pagAndresDatosController extends Controller
{

    public function read(){
        $info = new PagAndresDatos();
        $datos = $info->all();
        return $datos;
    }

    public function create(Request $request){
        $info = new PagAndresDatos();
        $info->nombreE = $request->input("nombreE");
        $info->numeroE = $request->input("numeroE");
        $info->save();
        $mensaje = ["mensaje"=>"se guardo el nuevo contacto"];
        return response()->json($mensaje);
    
    }

}
