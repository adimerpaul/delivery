<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/me', [\App\Http\Controllers\UserController::class, 'me']);
    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);

    Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
    Route::post('/users', [\App\Http\Controllers\UserController::class, 'store']);
    Route::put('/users/{id}', [\App\Http\Controllers\UserController::class, 'update']);
    Route::delete('/users/{id}', [\App\Http\Controllers\UserController::class, 'delete']);
    Route::put('/passwordUpdate/{id}', [\App\Http\Controllers\UserController::class, 'passwordUpdate']);
    Route::post('/avatar/{id}', [\App\Http\Controllers\UserController::class, 'avatar']);

    Route::get('/pedidos', [\App\Http\Controllers\PedidoController::class, 'index']);
    Route::post('/pedidos', [\App\Http\Controllers\PedidoController::class, 'store']);
    Route::put('/pedidos/{id}', [\App\Http\Controllers\PedidoController::class, 'update']);
    Route::delete('/pedidos/{id}', [\App\Http\Controllers\PedidoController::class, 'destroy']);
});
//rutas para moviles on api/mobil/asa
Route::group(['prefix' => 'mobil'], function(){
    Route::get('/peliculas', [\App\Http\Controllers\MovieController::class, 'peliculas']);
    Route::get('/proximos', [\App\Http\Controllers\MovieController::class, 'proximos']);
});


Route::get('/compromiso/{loan_id}', [\App\Http\Controllers\ReportController::class, 'compromiso']);
