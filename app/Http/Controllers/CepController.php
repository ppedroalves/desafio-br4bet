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
}
