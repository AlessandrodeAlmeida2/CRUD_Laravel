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


Route::get('/books', 'App\Http\Controllers\BookController@index');
Route::get('/books/create', 'App\Http\Controllers\BookController@create');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@show');
Route::get('/books/{id}/edit', 'App\Http\Controllers\BookController@edit');
Route::put('/books/{id}/formEdit', 'App\Http\Controllers\BookController@update');
Route::post('/books/{book}', 'App\Http\Controllers\BookController@store');
Route::delete('/books/{id}', 'App\Http\Controllers\BookController@destroy');
