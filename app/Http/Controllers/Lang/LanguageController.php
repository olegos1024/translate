<?php

namespace App\Http\Controllers\Lang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (array_key_exists($lang, config('app.applocales'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
}
