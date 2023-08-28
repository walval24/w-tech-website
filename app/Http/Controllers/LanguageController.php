<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        App::setLocale($locale);
        return redirect()->back();
    }
}
