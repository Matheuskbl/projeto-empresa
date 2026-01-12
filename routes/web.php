<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home');

Route::view('/sobre', 'sobre')->name('sobre');

Route::get('/vaga/{id}', [SiteController::class, 'show'])->name('vaga.show');
