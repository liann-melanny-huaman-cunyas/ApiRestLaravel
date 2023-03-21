<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as ApiV1;
use App\Http\Controllers\Api\V2\PostController as ApiV2;
use App\Http\Controllers\Api\LoginController as Login;

Route::apiResource('v1/posts',ApiV1::class)
        ->only(['index', 'show','destroy'])
        ->middleware('auth:sactum');


//ESTAS USANDO UNA VERSIÓN VIEJA, POR FAVOR CAMBIE A LA V2 DEL API
Route::apiResource('v2/posts',ApiV2::class)
        ->only(['index', 'show'])
        ->middleware('auth:sanctum');

//auntentificacion
ROute::post('login',[Login::class,'login']);

//Generas un token colocando datos requeridos
//postma Beare 1|4LpNEZRP6LyPcoVZvZEfB1PhZQXMCpW7fmCqwbIv

Route::apiResource('numero',ApiV1::class);