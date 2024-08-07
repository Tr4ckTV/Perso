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
    return view('home');
})->name('home');

Route::get('/scolarite', function () {
    return view('scolarite');
})->name('scolarite');

Route::get('/passions', function () {
    return view('passions');
})->name('passions');

Route::get('/projets', function () {
    return view('projets');
})->name('projets');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/mentions', function () {
    return view('mentions');
})->name('mentions');


