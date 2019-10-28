<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/**
 * Rotas para dia controller
 */
Route::get("/dia","DiaController@index");

Route::get("/dia/criar","DiaController@criarView");
Route::get("/dia/{id}","DiaController@verDia");
Route::post("/dia/criar","DiaController@criarPost");


Route::get("/dia/{id}/atualizar","DiaController@criar_atualizar_DiaPost");
Route::post("/dia/{id}/atualizar","DiaController@atualizarDia");
Route::get("/dia/{id}/deletar","DiaController@deletarDia");
Route::post("/dia/{id}/criar","DiaController@criarDia");


Route::post("/estudo","EstudoController@salvar");


Route::get("/estudo/{id}/deletar","EstudoController@deletar");
Route::get("/estudo/{id}/atualizar","EstudoController@atualizar");
Route::post("/estudo/{id}/atualizar","EstudoController@atualizarPost");
Route::get('/estudo/{id}/verUm',"EstudoController@verUm");