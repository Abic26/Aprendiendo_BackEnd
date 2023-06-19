<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\motoController;
use App\Http\Controllers\Api\gatoController;
use App\Http\Controllers\Api\perroController;
use App\Http\Controllers\Api\pagAndresDatosController;
use App\Http\Controllers\Api\pagBoutiqueController;
use App\Http\Controllers\Api\tiendaRopaController;




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

Route::get("/contactos", [pagAndresDatosController::class, 'read']);
Route::post("/contactos", [pagAndresDatosController::class, 'create']);


Route::get("/DatosBoutique", [pagBoutiqueController::class, 'read']);
Route::post("/DatosBoutique", [pagBoutiqueController::class, 'create']);
Route::get("/DatosBoutique/{nombre}",[pagBoutiqueController::class, 'searchName']);
Route::delete("/DatosBoutique/{id}", [pagBoutiqueController::class, 'delete']);
Route::put("/DatosBoutique/{id}", [pagBoutiqueController::class, 'update']);



Route::get("/tiendaRopa", [tiendaRopaController::class, 'read']);
Route::post("/tiendaRopa", [tiendaRopaController::class, 'create']);
Route::delete("/tiendaRopa/{id}", [tiendaRopaController::class, 'delete']);
Route::put("/tiendaRopa/{id}", [tiendaRopaController::class, 'update']);



Route::get("/Motos", [MotoController::class, 'read']);
Route::get("/Motos/{nombre}",[MotoController::class, 'searchName']);
Route::post("/Motos", [MotoController::class, 'create']);
Route::delete("/Motos/{id}", [MotoController::class, 'delete']);
Route::put("/Motos/{id}", [MotoController::class, 'update']);



Route::get("/Gatos",[gatoController::class, 'read']);
Route::get("/Gatos/{nombre}",[gatoController::class, 'searchName']);
Route::post("/Gatos",[gatoController::class, "create"]);
Route::delete("/Gatos/{id}",[gatoController::class,"delete"]);
Route::put("/Gatos/{id}", [gatoController::class, 'update']);



Route::get("/Perros",[perroController::class, 'read']);
Route::get("/Perros/{nombre}",[perroController::class, 'searchName']);
Route::get("/Perros",[perroController::class, 'searchId']);
Route::post("/Perros",[perroController::class, "create"]);
Route::delete("/Perros/{id}",[perroController::class,"delete"]);
Route::put("/Perros/{id}", [perroController::class, 'update']);





// Route::get("/saludo",function(Request $request){
//     $message =["mensaje" => "hola perras desde php/lavarel"];
//     return response()->json($message);
// });

// Route::post("/Motos",function(Request $request){
//     $message =["moto" => "ns"];
//     return response()->json($message);
// });

// Route::put("/ejemplo", function(Request $request){
//     $message =["aprendiendo" => "backend"];
//     return response()->json($message);
// });

// Route::patch("/ejemplo2", function(Request $request){
//     $message=["aprendiendo"=>"con stiv"];
//     return response()->json($message);
// });

// Route::delete("/ejemplo3",function(Request $request){
//     $message=["aprediendo"=>"con la distital"];
//     return response()->json($message);
// });

// Route::get("ejemplo4",function(Request $request){
//     $message=["aprendiendo"=>"con practica"];
//     return response()->json($message);
// });
