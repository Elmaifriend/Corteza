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
    route::get('/home', [PagesController::class, 'home'])
        ->name('home');

    Route::get('/contact', [PagesController::class, 'contact'])
        ->name('contact');

    Route::get('/catalog', [PagesController::class, 'catalog'])
        ->name('catalog');

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

    Route::get('/suplies', [PagesController::class, 'suplies'])
        ->name('suplies');
});
