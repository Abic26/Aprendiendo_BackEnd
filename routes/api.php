<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/saludo",function(Request $request){
    $message =["mensaje" => "hola perras desde php/lavarel"];
    return response()->json($message);
});

Route::post("/Motos",function(Request $request){
    $message =["moto" => "ns"];
    return response()->json($message);
});

Route::put("/ejemplo", function(Request $request){
    $message =["aprendiendo" => "backend"];
    return response()->json($message);
});

Route::patch("/ejemplo2", function(Request $request){
    $message=["aprendiendo"=>"con stiv"];
    return response()->json($message);
});

Route::delete("/ejemplo3",function(Request $request){
    $message=["aprediendo"=>"con la distital"];
    return response()->json($message);
});

Route::get("ejemplo4",function(Request $request){
    $message=["aprendiendo"=>"con practica"];
    return response()->json($message);
    
});