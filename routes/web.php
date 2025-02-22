<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\FranqueadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MatriculaController;

// Rota para a página home sem prefixo
Route::get('/', [HomeController::class, 'index'])->name('home');

// Agrupando as outras rotas com o prefixo 'pages'
Route::prefix('pages')->group(function () {
    Route::get('/faq', [HomeController::class, 'faq'])->name('pages.faq');
    Route::get('/pagamento', [HomeController::class, 'pagamento'])->name('pages.pagamento');
    Route::get('/privacidade', [HomeController::class, 'privacidade'])->name('pages.privacidade');
    Route::get('/about', [HomeController::class, 'about'])->name('pages.about');
    Route::get('/politica-reembolsos', [HomeController::class, 'pages.politicaReembolsos'])->name('pages.politicaReembolsos');
    Route::get('/checkout', [HomeController::class, 'checkout'])->name('pages.checkout');
    Route::get('/certificados', [HomeController::class, 'certificados'])->name('pages.certificados');
});

// Rota para unidades, quem somos, e matrícula
Route::get('/unidades', [UnidadeController::class, 'index'])->name('unidades');
Route::get('/unidade', [UnidadeController::class, 'unidade'])->name('unidades-3d');
Route::get('/quem-somos', [HomeController::class, 'quemSomos'])->name('quem-somos');
Route::get('/instrutores', [HomeController::class, 'instrutores'])->name('instrutores');

// Rota para o portal do Fiqueado
Route::prefix('portal-do-franqueado')->group(function () {
    Route::get('/', [FranqueadoController::class, 'index'])->name('portal-do-franqueado');
    Route::get('/suporte', [FranqueadoController::class, 'suporte'])->name('portal-do-franqueado.suporte');

});
// Rota para matrícula
Route::get('/matricula', [MatriculaController::class, 'create'])->name('matricula');


// Rota para blog
Route::get('/blog', [BlogController::class, 'index'])->name('pages.blog');


Route::get('/login', [LoginController::class, 'login'])->name('.login');
Route::get('/register', [LoginController::class, 'register'])->name('.register');
Route::get('/showForgotPasswordForm', [LoginController::class, 'showForgotPasswordForm'])->name('.reset');

