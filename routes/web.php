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

Route::get('/teste', function() {
    echo "Teste";
});

Route::get('/veiculos', 'ctrlVeiculos@listar');
Route::get('/veiculos/adicionar', 'ctrlVeiculos@adicionar');

