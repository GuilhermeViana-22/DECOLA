<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function index()
    {
        return view('pages.unidades');  // Caminho para a p�gina home.blade.php
    }

  
}
