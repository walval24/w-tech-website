<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index(Request $request, $language = 'it')
    {
        if (!in_array($language, ['it', 'en'])) {
            abort(404); // Gestisci il caso di lingua non supportata
        }
        return view("home-$language");
    }
}
