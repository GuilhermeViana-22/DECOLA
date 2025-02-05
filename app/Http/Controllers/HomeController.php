<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');  // Caminho para a p�gina home.blade.php
    }

    public function about()
    {
        return view('pages.home');  // Caminho para a p�gina home.blade.php
    }


    public function faq()
    {
        return view('pages.faq.faq');
    }

    public function pagamento()
    {
        return view('pages.pagamento.pagamento');  // Caminho para a p�gina pagamento.blade.php
    }

    public function privacidade()
    {
        return view('pages.privacidade');  // Caminho para a p�gina privacidade.blade.php
    }
}
