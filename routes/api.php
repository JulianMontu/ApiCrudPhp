<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::get('/test',function (Request $request) {
    return "Hola mundo";

});*/

//Route::apiResource('doctor', DoctorController::class);
    /*Route::get('doctors',[DoctorController::class,'index']);
    Route::post('doctors',[DoctorController::class,'store']);
    Route::get('doctors/{doctor}',[DoctorController::class,'show']);
    Route::put('doctors/{doctor}',[DoctorController::class,'update']);
    Route::delete('doctors/{doctor}',[DoctorController::class,'destroy']);*/
Route::apiResource('doctor',DoctorController::class);
Route::apiResource('estudiante',\App\Http\Controllers\EstudianteController::class);
