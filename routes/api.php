<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\PeriodController;

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
Route::get('/structure', [StructureController::class, 'index']);
Route::prefix ('/structure')->group(function() {
    Route::get('/detail/{id}',[StructureController::class,'show']);
    Route::post('/store', [StructureController::class, 'store']);
    Route::put('/doUpdate/{id}', [StructureController::class, 'update']);
    Route::delete('/doDelete/{id}', [StructureController::class, 'destroy']);
});
Route::get('/period', [PeriodController::class, 'index']);
Route::prefix ('/period')->group(function() {
    Route::get('/detail/{id}',[PeriodController::class,'show']);
    Route::post('/store', [PeriodController::class, 'store']);
    Route::put('/doUpdate/{id}', [PeriodController::class, 'update']);
    Route::delete('/doDelete/{id}', [PeriodController::class, 'destroy']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', [HomeController::class, 'index']);