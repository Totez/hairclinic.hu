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

Route::get('/',[
    "uses" => "HomeController@home",
    "as" => "home"
]);

Route::get('/hairclinic', [
    "uses" => "HomeController@hairclinic",
    "as" => "hairclinic"
]);

Route::get('/hairclinic-extra', [
    "uses" => "HomeController@hairclinicExtra",
    "as" => "hairclinic_extra"
]);

Route::get('/hairclinic-men', [
    "uses" => "HomeController@hairclinicmen",
    "as" => "hairclinic_men"
]);

Route::get('/good-to-know', [
    "uses" => "HomeController@goodToKnow",
    "as" => "good_to_know"
]);

Route::get('/advice-of-zsidro', [
    "uses" => "HomeController@advice",
    "as" => "advice"
]);

Route::get('/opinions', function () {
    return view('opinions');
});

Route::get('/buying', [
    "uses" => "HomeController@buy",
    "as" => "buy"
]);
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

    Route::get("/product/update/self", [
        "uses" => "ProductController@selfUpdate",
        "as" => "product.update.self"
    ]);

    Route::prefix("page")->name("page.")->group(function () {

        Route::get("/text/list", [
            "uses" => "PageContentController@list",
            "as" => "text.list"
        ]);

        Route::post("/text/update", [
            "uses" => "PageContentController@update",
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
