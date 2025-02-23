<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

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


    public function instrutores(){
        return view('pages.instrutores.instrutores');
    }

    public function checkout(){
        return view('pages.checkout.index');
    }

    public function certificados(){
        return view('pages.certificado.certificado');
    }

    public function news()
{
    $dados = [
        'subject' => '🎉 Inscrição Confirmada na Newsletter!',
        'body' => 'Obrigado por se inscrever! Em breve, você receberá novidades exclusivas diretamente no seu e-mail.',
    ];

    Mail::to('gguicido.viana@gmail.com')->send(SendMail::enviarNewsLetter($dados));

    return response()->json(['message' => 'E-mail de confirmação enviado com sucesso!']);
}

}
