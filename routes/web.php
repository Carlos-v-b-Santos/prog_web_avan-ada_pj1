<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\GameController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');

//====== catalogo de games ======
Route::get('/catalogo', [GameController::class, 'index'])->name('catalogo.index');
Route::prefix('admin')->group(function () {
    
    // Usamos 'except' para NÃO recriar a rota 'index' pública
    Route::resource('games', GameController::class)->except(['index', 'show']);

    // Criamos uma rota 'index' separada para o admin, que lista os produtos 
    Route::get('games', [GameController::class, 'adminIndex'])->name('admin.games.index');
});