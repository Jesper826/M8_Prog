<?php

use App\Http\Controllers\AfspraakController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/afspraak/{id}', [AfspraakController::class, 'get'])->name('afspraak');
Route::get('/mijnpagina', [PaginaController::class, 'get'])->name('mijnpagina');
Route::get('/contact', [ContactController::class, 'get'])->name('contact');
Route::get('/languages', [LanguageController::class, 'list'])->name('languages.list');
Route::get('/languages/{lang}', [LanguageController::class, 'details'])->name('languages.details');
