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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/articulos', 'ArticleController@guest')->name('article.guest');

Route::post('/user', 'PublicistController@create')->name('create.user');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('dashboard/article','ArticleController');
    Route::resource('dashboard/category','CategoryController');  
});