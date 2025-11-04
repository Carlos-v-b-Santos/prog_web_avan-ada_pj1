<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MensagemController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::resource('mensagens', MensagemController::class)->only(['index', 'create', 'store']);

//====== catalogo de games ======
Route::get('/catalogo', [GameController::class, 'index'])->name('catalogo.index');
Route::prefix('admin')->group(function () {
    
    // Usamos 'except' para NÃO recriar a rota 'index' pública
    Route::resource('games', GameController::class)->except(['index', 'show']);

    // Criamos uma rota 'index' separada para o admin, que lista os produtos 
    Route::get('games', [GameController::class, 'adminIndex'])->name('admin.games.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

