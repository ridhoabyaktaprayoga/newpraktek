<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Articlecontroller;

Route::apiResource('articles' , Articlecontroller::class);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
