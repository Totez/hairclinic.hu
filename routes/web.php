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

Route::get('/hairclinic', [
    "uses" => "HomeController@hairclinic",
    "as" => "hairclinic"
]);

Route::get('/hairclinic-extra', function () {
    return view('hairclinic-extra');
});

Route::get('/hairclinic-men', function () {
    return view('hairclinic-men');
});

Route::get('/good-to-know', [
    "uses" => "HomeController@goodToKnow",
    "as" => "goodtoknow"
]);

Route::get('/opinions', function () {
    return view('opinions');
});

Route::get('/buying', function () {
    return view('buying');
});
Route::get('/teszt', function () {
    return view('teszt');
});

Route::get("/login", [
    "uses" => "Auth\LoginController@showLoginForm",
    "as" => "login"
]);

Route::post("/login", [
    "uses" => "Auth\LoginController@login",
    "as" => "log-in"
]);

Route::post("/logout", [
    "uses" => "Auth\LoginController@logout",
    "as" => "log-out"
]);

Route::prefix("admin")
    ->name("admin.")
    ->namespace("Admin")
    ->middleware("auth")
    ->group(function () {

    Route::get("/home", [
        "uses" => "AdminController@home",
        "as" => "home"
    ]);

    Route::get("/product/list", [
        "uses" => "ProductController@list",
        "as" => "product.list"
    ]);

    Route::post("/product/update", [
        "uses" => "ProductController@update",
        "as" => "product.update"
    ]);

    Route::prefix("page")->name("page.")->group(function () {

        Route::get("/text/list", [
            "uses" => "PageTextController@list",
            "as" => "text.list"
        ]);

        Route::post("/text/update", [
            "uses" => "PageTextController@update",
            "as" => "text.update"
        ]);

        Route::get("/image/list", [
            "uses" => "PageImageController@list",
            "as" => "image.list"
        ]);

        Route::post("/image/update", [
            "uses" => "PageImageController@update",
            "as" => "image.update"
        ]);
    });
});