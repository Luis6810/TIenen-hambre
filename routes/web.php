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


Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'MenuController@index')->name('menu');
Route::get('/menu/{platillo}', 'MenuController@show')->name('platillo');

Route::get('/especiales', 'EspecialesController@index')->name('especiales');

Route::get('/ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');

Route::get('/postres', 'PostresController@index')->name('postres');
Route::get('/bebidas', 'BebidasController@index')->name('bebidas');

Route::get('/comprar/{id}', 'ComprarController@index')->name('comprar');

