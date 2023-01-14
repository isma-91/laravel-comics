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
    $shop_links = config('shop_links');
    return view('guest.homepage', [
        'menu'       => $menu,
        'shop_links' => $shop_links,
    ]);
})->name('home');

Route::get('/comics', function () {
    $menu = config('menu');
    $comics = config('comics');
    $shop_links = config('shop_links');
    return view('guest.comics',[
        'menu'       => $menu,
        'comics'     => $comics,
        'shop_links' => $shop_links,
    ]);
})->name('comics');

Route::get('/movies', function () {
    $menu = config('menu');
    return view('guest.movies',[
        'menu' => $menu,
    ]);
})->name('movies');

Route::get('/shop', function () {
    $menu = config('menu');
    $comics = config('comics');
    $shop_links = config('shop_links');
    return view('guest.comic_shop',[
        'menu' => $menu,
        'comics'     => $comics,
        'shop_links' => $shop_links,
    ]);
})->name('shop');
