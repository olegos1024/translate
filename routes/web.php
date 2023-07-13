<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lang\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('translate');
});
Route::get('/view', function () {
    return view('view');
});

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])
->name('lang.switch');
