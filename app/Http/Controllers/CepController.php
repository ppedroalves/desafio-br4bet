<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CepController extends Controller
{
    public function index()
    {
        return view('consulta-cep');
    }

    public function buscarCEP(Request $request)
    {
        $cep = $request->input('cep');
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");
        $endereco = $response->json();

        return view('consulta-cep', compact('endereco'));
    }
}
