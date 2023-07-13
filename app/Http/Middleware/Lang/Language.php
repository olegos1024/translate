<?php

namespace App\Http\Middleware\Lang;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session()->has('applocale') and array_key_exists(Session()->get('applocale'), config('app.applocales'))) {
            App::setLocale(Session()->get('applocale'));
        } else {
            App::setLocale(config('app.locale'));
        }
        return $next($request);
    }
}
