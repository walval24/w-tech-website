<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('/{language?}', [LanguageController::class, 'index']);

