<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MensagemController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('/catalogo/index', [GameController::class, 'catalogo'])->name('catalogo');
Route::resource('mensagens', MensagemController::class);

Route::middleware('auth')->group(function () {
    Route::resource('games', GameController::class);
    Route::resource('mensagens', MensagemController::class)->only(['index']);
});

require __DIR__.'/auth.php';

