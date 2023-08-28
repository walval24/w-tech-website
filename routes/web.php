<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home-en', function () {
    return view('home-eng');
});

Route::get('/change-language/{locale}', [LanguageController::class, 'switchLanguage'])
    ->name('change.language');
