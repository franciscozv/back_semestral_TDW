<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BebidaController;
use App\Http\Controllers\Api\BodegaController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(BeBidaController::class)->group(function () {
    Route::get('/bebidas', 'index');
    Route::post('/bebida', 'store');
    Route::get('/bebida/{id}', 'show');
    Route::put('/bebida/{id}', 'update');
    Route::delete('/bebida/{id}', 'destroy');
});

Route::controller(BodegaController::class)->group(function () {
    Route::get('/bodegas', 'index');
    Route::post('/bodega', 'store');
    Route::get('/bodega/{id}', 'show');
    Route::put('/bodega/{id}', 'update');
    Route::delete('/bodega/{id}', 'destroy');
});