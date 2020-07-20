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
    return view('index');
});

Route::get('/hairclinic', function () {
    return view('hairclinic');
});

Route::get('/hairclinic-extra', function () {
    return view('hairclinic-extra');
});

Route::get('/hairclinic-men', function () {
    return view('hairclinic-men');
});

Route::get('/good-to-know', function () {
    return view('good-to-know');
});

Route::get('/opinions', function () {
    return view('opinions');
});

Route::get('/buying', function () {
    return view('buying');
});
