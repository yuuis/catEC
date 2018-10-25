<?php

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
    return view('top');
});

Route::resource("products", "PostController", ["only" => ["create", "store"]]);

Route::get("/login", ["as" => "login", "uses" => "SessionController@create"]);
Route::post("/login", "SessionController@store");
Route::get("/logout", ["as" => "logout", "uses" => "SessionController@destroy"]);
