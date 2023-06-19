<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gato;

class gatoController extends Controller
{
    public function read(){
        $gatos = new Gato();
        $datos = $gatos->all();
        return $datos;
    }
    
    public function searchName($nombre)
    {
        $gatos = Gato::where('nombre', $nombre)->first();
        if (!$gatos) {
            $mensaje = ["mensaje" => "No se encontró ningún gato con ese nombre"];
            return response()->json($mensaje);
        }
        return response()->json($gatos);
    }

    public function create(Request $request){
        $gato = new Gato();
        $gato->nombre = $request->input("nombre");
        $gato->edad = $request->input("edad");
        $gato->save();
        $mensaje = ["mensaje"=>"se guardo el michi"];
        return response()->json($mensaje);
    }

    public function delete($id){
        $gato = Gato::find($id);
        if(!$gato){
            $mensaje = ["mensaje"=>"el michi no extiste"];
            return response()->json($mensaje);
        }
        $gato->delete();
            $mensaje = ["mensaje"=>"el michi se borro"];
            return response()->json($mensaje);

    }

    public function update(Request $request, $id){
        $gato = Gato::find($id);

        if(!$gato){
            $mensaje = ["mensaje"=>"el michi no extiste"];
            return response()->json($mensaje);
        }

        $gato->nombre= $request->input("nombre");
        $gato->edad= $request->input("edad");
        $gato->save();
        $mensaje = ["mensaje"=>"el michi se actualizo"];
        return response()->json($mensaje);
    }
    
}
