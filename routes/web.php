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
    return view('welcome');
});

Route::get('/', function () {
    return view('testing');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/biodata', function () {
    return view('biodata');
});

Route::get('/tamu', function () {
    return view('tamu');
});
