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

Route::get('/','App\Http\Controllers\UserController@index');
Route::get('/sendForm','App\Http\Controllers\UserController@show');
Route::post('/','App\Http\Controllers\UserController@store');
Route::get('/admin','App\Http\Controllers\UserController@admin')->middleware('auth');
Route::get('/welcome/{id}','App\Http\Controllers\UserController@create')->middleware('auth');
Route::delete('/welcome/{id}','App\Http\Controllers\UserController@destroy')->middleware('auth');

Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
