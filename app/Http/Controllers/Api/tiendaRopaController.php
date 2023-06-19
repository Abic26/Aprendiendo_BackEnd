<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tiendaRopa;

class tiendaRopaController extends Controller
{

    public function read(){
        $compra= new tiendaRopa();
        $datos= $compra->all();
        return $datos;
    }

    public function create(Request $request){
        $datos= new tiendaRopa();
        $datos->nombreCliente=$request->input("nombreCliente");
        $datos->producto=$request->input("producto");
        $datos->precio=$request->input("precio");
        $datos->save();
        $mensaje = ["mensaje"=>"se guardo el producto"];
        return response()->json($mensaje);

    }
    public function delete($id){
        $datos = tiendaRopa::find($id);
        if(!$datos){
            $mensaje = ["mensaje"=>"el cliente no extiste"];
            return response()->json($mensaje);
        }else{
            $datos->delete();
            $mensaje = ["mensaje"=>"el cliente se borro"];
            return response()->json($mensaje);
        }
        
    }
    public function update(Request $request, $id){
        $datos = tiendaRopa::find($id);

        if(!$datos){
            $mensaje = ["mensaje"=>"el prodcuto no extiste"];
            return response()->json($mensaje);
        }

        $datos->nombreCliente= $request->input("nombreCliente");
        $datos->producto= $request->input("producto");
        $datos->precio= $request->input("precio");
        $datos->save();
        $mensaje = ["mensaje"=>"el perrito se actualizo"];
        return response()->json($mensaje);
    }

}
