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
    return view('welcome');
});

Route::get('/luna', function () {
    return view('luna');
});


Route::get('/sol', function () {
    return view('sol');
});

Route::get('/cometas', function () {
    return view('cometas');
});

Route::get('/mercurio', function () {
    return view('mercurio');
});

Route::get('/venus', function () {
    return view('venus');
});

Route::get('/tierra', function () {
    return view('tierra');
});

Route::get('/marte', function () {
    return view('marte');
});

Route::get('/jupiter', function () {
    return view('jupiter');
});

Route::get('/saturno', function () {
    return view('saturno');
});

Route::get('/urano', function () {
    return view('urano');
});

Route::get('/neptuno', function () {
    return view('neptuno');
});

Route::get('/pluton', function () {
    return view('pluton');
});





