<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/**
 * Rotas Admin */
route::get('/admin', function () {
    return view('admin.home');
});

/**
 * Rotas Site
 */

Route::get('/', [SiteController::class, 'index'])->name('site.home');
Route::get('/contato', [SiteController::class, 'contato'])->name('site.contato');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('site.sobre');

 /**
  * Rotas User
  */
