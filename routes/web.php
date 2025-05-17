<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get('/en', function () {
    return view('en.index');
})->name('home.en');

Route::get('/departamento-garden', function () {
    return view('garden');
});

Route::get('/departamento-palma', function () {
    return view('palma');
});

Route::get('/departamento-aqua', function () {
    return view('aqua');
});

Route::get('/gracias-por-contactarnos', function () {
    return view('gracias');
});



Route::get('/departamento-garden/en', function () {
    return view('garden');
});

Route::get('/departamento-palma/en', function () {
    return view('palma');
});

Route::get('/departamento-aqua/en', function () {
    return view('aqua');
});

Route::get('/gracias-por-contactarnos/en', function () {
    return view('gracias');
});
