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
})->name('main');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blogs/{user?}', 'HomeController@blog')->name('blogs');


Route::middleware('auth')->prefix('blog')->group(function () {
    Route::get('/create','BlogController@index');
    Route::get('/update/{id?}','BlogController@index');
    Route::get('/delete/{id?}','BlogController@index');
    Route::post('/store','BlogController@store');
});
