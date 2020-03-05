<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('create', 'HomeController@create');
Route::post('add_todo', 'TodoController@add_todo');
Route::post('delete_todo', 'TodoController@delete_todo');
Route::get('/login', 'LoginController@index');
Route::post('checklogin', 'LoginController@checklogin');
Route::get('successlogin', 'LoginController@successlogin');
Route::get('logout', 'LoginController@logout');
