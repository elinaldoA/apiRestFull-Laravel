<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtigoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Listar Artigos
Route::get('artigos', [ArtigoController::class, 'index']);
//Listar single artigos
Route::get('artigo/{id}', [ArtigoController::class, 'show']);
//Criar novo artigo
Route::post('artigo', [ArtigoController::class, 'store']);
//Atualizar artigo
Route::put('artigo/{id}', [ArtigoController::class, 'update']);
//Deletar artigo
Route::delete('artigo/{id}',[ArtigoController::class,'destroy']);
