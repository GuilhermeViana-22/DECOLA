<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FranqueadoController extends Controller
{

    public function index()
    {
        // lógica do index
        return view('pages.franqueado.index');
    }

    public function suporte()
    {
        // lógica do suporte
        return view('pages.franqueado.suporte');
    }


}
