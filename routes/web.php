<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

/*Route::get('/', function () {
    return view('home');
});*/

/** 
 * Rotas Admin */


/**
 * Rotas Site
 */

Route::get('/', [SiteController::class, 'index'])->name('site.home');

 /**
  * Rotas User
  */