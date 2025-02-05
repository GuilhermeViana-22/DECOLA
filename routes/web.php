<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\FiqueadoController;
use App\Http\Controllers\MatriculaController;

// Rota para a página home sem prefixo
Route::get('/', [HomeController::class, 'index'])->name('home');

// Agrupando as outras rotas com o prefixo 'pages'
Route::prefix('pages')->group(function () {
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/pagamento', [HomeController::class, 'pagamento'])->name('pagamento');
    Route::get('/privacidade', [HomeController::class, 'privacidade'])->name('privacidade');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/politica-reembolsos', [HomeController::class, 'politicaReembolsos'])->name('politicaReembolsos');
});

// Rota para unidades, quem somos, e matrícula
Route::get('/unidades', [UnidadeController::class, 'index'])->name('unidades');

Route::get('/quem-somos', [HomeController::class, 'quemSomos'])->name('quem-somos');

// Rota para o portal do Fiqueado
Route::prefix('portal-do-fiqueado')->group(function () {
    Route::get('/login', [FiqueadoController::class, 'login'])->name('fiqueado.login');
    Route::get('/suporte', [FiqueadoController::class, 'suporte'])->name('fiqueado.suporte');
});

// Rota para matrícula
Route::get('/matricula', [MatriculaController::class, 'create'])->name('matricula');
