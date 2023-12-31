<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/bonus', function () {
    $data = [
        'titolo' => 'Pagina HTML',
        'descrizione' => 'LARAVEL',
        'autore' => 'QuintusDev',
        'datacreazione' => '20/07/2023',
        'azienda' => 'BOOLEAN COURSE',
    ];
    return view('bonus', $data);
});