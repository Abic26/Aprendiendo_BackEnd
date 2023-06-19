<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pagBoutique;


class pagBoutiqueController extends Controller
{

    public function read(){
        $info = new pagBoutique();
        $datos = $info ->all();
        return $datos;
    }
    public function searchName($nombreI)
    {
        $info = pagBoutique::where('nombreI', $nombreI)->first();
    
        if (!$info) {
            $mensaje = ["mensaje" => "No se encontró ningún dato con ese nombre"];
            return response()->json($mensaje);
        }
    
        return response()->json($info);
    }

    public function create(Request $request){
        $info = new pagBoutique();
        $info-> nombreI = $request->input("nombreI");
        $info-> apellidoI = $request->input("apellidoI");
        $info-> numDocuI = $request->input("numDocuI");
        $info-> textoI = $request->input("textoI");
        $info->save();
        $mensaje = ["mensaje"=>"se guardo el nuevo contacto"];
        return response()->json($mensaje);

    }

    public function delete($id){
        $info = pagBoutique::find($id);

        if (!$info) {
            $message = ["message" => "La infomacion no existe"];
            return response()->json($message);
        }

        $info->delete();
        $message = ["message" => "La infomacion ha sido eliminada"];
        return response()->json($message);
    }

    public function update(Request $request, $id){
        $info = pagBoutique::find($id);
        
        if (!$info) {
            $message = ["message" => "La infomacion no existe"];
            return response()->json($message);
        }
    
        $info-> nombreI = $request->input("nombreI");
        $info-> apellidoI = $request->input("apellidoI");
        $info-> numDocuI = $request->input("numDocuI");
        $info-> textoI = $request->input("textoI");
        $info->save();
    
        $message = ["message" => "La infomacion ha sido actualizada"];
        return response()->json($message);
    }

}
