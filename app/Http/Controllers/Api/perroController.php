<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\perro;



class perroController extends Controller
{
    public function read(){
        $perros = new Perro();
        $datos = $perros->all();
        return $datos;
    }

    public function searchName($nombre)
    {
        $perro = Perro::where('nombre', $nombre)->first();
        if (!$perro) {
            $mensaje = ["mensaje" => "No se encontró ningún perro con ese nombre"];
            return response()->json($mensaje);
        }
        return response()->json($perro);
    }


    public function searchId(Request $request){
        $perros = new Perro();
        if($request->query("id")){
            $perro = $perros->find($request->query("id"));
        }else{

            $perro = $perros->all();
        }
        
        return response()->json($perro);
        
    }
    
    
    public function create(Request $request){
        $perros = new Perro();
        $perros->nombre = $request->input("nombre");
        $perros->edad = $request->input("edad");
        $perros->sexo = $request->input("sexo");
        $perros->save();
        $mensaje = ["mensaje"=>"se guardo el perrito"];
        return response()->json($mensaje);
    }

    public function delete($id){
        $perros = Perro::find($id);
        if(!$perros){
            $mensaje = ["mensaje"=>"el perrito no extiste"];
            return response()->json($mensaje);
        }
        $perros->delete();
            $mensaje = ["mensaje"=>"el perrito se borro"];
            return response()->json($mensaje);
        
    }

    public function update(Request $request, $id){
        $perros = Perro::find($id);

        if(!$perros){
            $mensaje = ["mensaje"=>"el perrito no extiste"];
            return response()->json($mensaje);
        }

        $perros->nombre= $request->input("nombre");
        $perros->edad= $request->input("edad");
        $perros->sexo= $request->input("sexo");
        $perros->save();
        $mensaje = ["mensaje"=>"el perrito se actualizo"];
        return response()->json($mensaje);
    }

}
