<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Rota para a página home sem prefixo
Route::get('/', [HomeController::class, 'index'])->name('home');

// Agrupando as outras rotas com o prefixo 'pages'
Route::prefix('pages')->group(function () {
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/pagamento', [HomeController::class, 'pagamento'])->name('pagamento');
    Route::get('/privacidade', [HomeController::class, 'privacidade'])->name('privacidade');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/politica-reembolsos', [HomeController::class, 'politicaReembolsos'])->name('politicaReembolsos');  // Nome da rota
});
