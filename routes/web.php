<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\FranqueadoController;
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
});

// Rota para unidades, quem somos, e matrícula
Route::get('/unidades', [UnidadeController::class, 'index'])->name('unidades');

Route::get('/quem-somos', [HomeController::class, 'quemSomos'])->name('quem-somos');
Route::get('/instrutores', [HomeController::class, 'instrutores'])->name('instrutores');

// Rota para o portal do Fiqueado
Route::prefix('portal-do-franqueado')->group(function () {
    Route::get('/', [FranqueadoController::class, 'index'])->name('portal-do-franqueado');
    Route::get('/suporte', [FranqueadoController::class, 'suporte'])->name('portal-do-franqueado.suporte');
});

// Rota para matrícula
Route::get('/matricula', [MatriculaController::class, 'create'])->name('matricula');
