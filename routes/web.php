<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

use App\Http\Controllers\MensagemController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::resource('mensagens', MensagemController::class)->only(['index', 'create', 'store']);
