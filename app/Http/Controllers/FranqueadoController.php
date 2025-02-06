<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FranqueadoController extends Controller
{
    public function index()
    {
        return view('pages.franqueado.franqueado');  // Caminho para a p�gina home.blade.php
    }

    public function suporte()
    {
        return view('pages.franqueado.suporte');  // Caminho para a p�gina home.blade.php
    }
}
