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
    $menu = config('menu');
    return view('guest.homepage', [
        'menu' => $menu,
    ]);
})->name('home');

Route::get('/comics', function () {
    $menu = config('menu');
    $comics = config('comics');
    return view('guest.comics',[
        'menu' => $menu,
        'comics' => $comics,
    ]);
})->name('comics');

Route::get('/movies', function () {
    $menu = config('menu');
    return view('guest.movies',[
        'menu' => $menu,
    ]);
})->name('movies');
