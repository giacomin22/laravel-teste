<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function() {
    return view('welcome');
});

// Veículos
Route::get('/', 'ctrlVeiculos@listar');                 //Lista veículos
Route::get('/veiculos', 'ctrlVeiculos@listar');                 //Lista veículos
Route::get('/veiculos/adicionar', 'ctrlVeiculos@adicionar');    //Adiciona veículos
Route::post('/veiculos/salvar', 'ctrlVeiculos@salvar');         //Salva veículos adicionados
Route::post('/veiculos/remover/{id}', 'ctrlVeiculos@remover');  //Remove veículo
Route::post('/veiculos/editar/{id}', 'ctrlVeiculos@editar');    //Edita veículo
Route::post('/veiculos/atualizar', 'ctrlVeiculos@atualizar');    //Edita veículo



// Teste simples
Route::get('/teste', function() {
    echo "Teste";
});