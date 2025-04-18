<?php

use App\Http\Controllers\Pages;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'inicio'])
    ->name('inicio');

Route::get('/corteza', [PagesController::class, 'corteza'])
    ->name('corteza');

Route::get('/funciones', [PagesController::class, 'funciones'])
    ->name('funciones');

Route::get('/historia', [PagesController::class, 'historia'])
    ->name('historia');

Route::get('/tiny-houses', [PagesController::class, 'tinyHouses'])
    ->name('tiny-houses');

Route::get('/beneficios', [PagesController::class, 'beneficios'])
    ->name('beneficios');

Route::get('/polizas', [PagesController::class, 'polizas'])
    ->name('polizas');

Route::get('/floema', [PagesController::class, 'floema'])
    ->name('floema');

Route::post("/floema_form_esp", [PagesController::class, "floemaFormEsp"])
    ->name("floema_form_esp");

Route::get('/faq', [PagesController::class, 'faq'])
    ->name('faq');

Route::get('/nido', [PagesController::class, 'nido'])
    ->name('nido');

Route::get('/raiz', [PagesController::class, 'raiz'])
    ->name('raiz');

Route::get('/savia', [PagesController::class, 'savia'])
    ->name('savia');

Route::get('/copa', [PagesController::class, 'copa'])
    ->name('copa');

Route::get('/ebano', [PagesController::class, 'ebano'])
    ->name('ebano');


Route::prefix('en')->group( function(){
    Route::get('/', [PagesController::class, 'home'])
      ->name('home');

    Route::get('/corteza', [PagesController::class, 'en_corteza'])
      ->name('en_corteza');

    Route::get('/functions', [PagesController::class, 'functions'])
      ->name('functions');


    Route::get('/history', [PagesController::class, 'history'])
      ->name('history');


    Route::get('/tiny-houses', [PagesController::class, 'en_tinyHouses'])
      ->name('en_tiny-houses');

    Route::get('/benefits', [PagesController::class, 'benefits'])
      ->name('benefits');

    Route::get('/policies', [PagesController::class, 'policies'])
      ->name('policies');


    Route::get('/floema', [PagesController::class, 'en_floema'])
      ->name('en_floema');


    Route::get('/faq', [PagesController::class, 'en_faq'])
      ->name('en_faq');


    Route::get('/nido', [PagesController::class, 'en_nido'])
        ->name('en_nido');

    Route::get('/raiz', [PagesController::class, 'en_raiz'])
        ->name('en_raiz');

    Route::get('/savia', [PagesController::class, 'en_sabia'])
        ->name('en_savia');

    Route::get('/copa', [PagesController::class, 'en_copa'])
        ->name('en_copa');

    Route::get('/ebano', [PagesController::class, 'en_ebano'])
        ->name('en_ebano');
});
