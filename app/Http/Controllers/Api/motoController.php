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
            return response()->json($message, 404);
        }

        $moto->delete();
        $message = ["message" => "La moto ha sido eliminada"];
        return response()->json($message);
    }

    public function update(Request $request, $id){
        $moto = Moto::find($id);
        
        if (!$moto) {
            $message = ["message" => "La moto no existe"];
            return response()->json($message, 404);
        }
    
        $moto->marca = $request->input("marca");
        $moto->cc = $request->input("cc");
        $moto->tipo = $request->input("tipo");
        $moto->save();
    
        $message = ["message" => "La moto ha sido actualizada"];
        return response()->json($message);
    }



    public function updates(){
        return true;
    }

    public function deletes(){
        return true;
    }
}
