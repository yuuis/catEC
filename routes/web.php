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

Route::get('/', ["as" => "root", "uses" => function () { return view('top'); }]);

Route::resource("products", "ProductController", ["only" => ["create", "store", "show", "index"]]);

Route::resource("purchase", "PurchaseController", ["only" => ["store", "show", "index"]]);

Route::get("/purchase/create/{productId}", ["as" => "purchase.create", "uses" => "PurchaseController@create"]);

Route::get("/admin/products", ["as" => "admin.products", "uses" => "AdminController@productsIndex"]);
Route::get("/admin/purchases", ["as" => "admin.purchases", "uses" => "AdminController@purchasesIndex"]);

Route::get("/login", ["as" => "login", "uses" => "SessionController@create"]);
Route::post("/login", "SessionController@store");
Route::get("/logout", ["as" => "logout", "uses" => "SessionController@destroy"]);
