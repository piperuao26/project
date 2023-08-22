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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/specification', 'App\Http\Controllers\SController@index')->name("specification.index");
Route::get('/specification/create', 'App\Http\Controllers\SController@create')->name("specification.create");
Route::post('/specification/save', 'App\Http\Controllers\SController@save')->name("specification.save");
Route::get('/specification/{id}', 'App\Http\Controllers\SController@show')->name("specification.show");


