<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\ReceptekController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/receptek',[ReceptekController::class,'index']);
Route::get('/receptek/{id}',[ReceptekController::class,'show']);
Route::get('/kategoriak',[KategoriaController::class,'index']);
Route::get('/receptek/{id}',[KategoriaController::class,'show']);
Route::post('/recept',[ReceptekController::class,'store']);
Route::delete('/recept/{id}',[ReceptekController::class,'destroy']);





