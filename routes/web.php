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
});

Route::get('/donate', function () {
    return view('pages.donate');
});
Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/details', function () {
    return view('pages.details');
});
