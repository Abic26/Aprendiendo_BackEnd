<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Moto;

class motoController extends Controller
{
    public function read(){

        $motos = new Moto();
        $data = $motos->all();

        return $data;
    }

    public function searchName($marca)
    {
        $motos = Moto::where('marca', $marca)->first();
    
        if (!$motos) {
            $mensaje = ["mensaje" => "No se encontró ningún moto con esa marca"];
            return response()->json($mensaje);
        }
    
        return response()->json($motos);
    }

    public function create(Request $request){
        $moto = new Moto();
        $moto->marca = $request->input("marca");
        $moto->cc = $request->input("cc");
        $moto->tipo = $request->input("tipo");
        $moto->save();
        $message=["message" => "registro exitoso"];
        return response()->json($message);
        
    }
    
    public function delete($id){
        $moto = Moto::find($id);

        if (!$moto) {
            $message = ["message" => "La moto no existe"];
            return response()->json($message);
        }

        $moto->delete();
        $message = ["message" => "La moto ha sido eliminada"];
        return response()->json($message);
    }

    public function update(Request $request, $id){
        $moto = Moto::find($id);
        
        if (!$moto) {
            $message = ["message" => "La moto no existe"];
            return response()->json($message);
        }
    
        $moto->marca = $request->input("marca");
        $moto->cc = $request->input("cc");
        $moto->tipo = $request->input("tipo");
        $moto->save();
    
        $message = ["message" => "La moto ha sido actualizada"];
        return response()->json($message);
    }

}
