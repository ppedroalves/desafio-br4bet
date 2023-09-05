<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/consulta-cep', [CepController::class, 'index']);
Route::post('/consulta-cep', [ViaCepController::class, 'buscarCEP']);

