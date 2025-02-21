<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // lógica do login
        return view('pages.login.index');
    }

}
