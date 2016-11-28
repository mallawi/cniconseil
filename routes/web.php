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

Route::get("/", "PagesController@index");

Route::get("annonces/{id}", "PagesController@showAnnonce");

Route::get("annonces", "PagesController@annonces");

Route::get("services", "PagesController@services");

Route::get("form/{type?}", "RequestsController@form");

Route::post("form", "RequestsController@store");
