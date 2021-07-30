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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blogs/{user?}', 'CommonController@blog')->name('blogs');

Auth::routes();




Route::middleware('auth')->prefix('blog')->group(function () {
    Route::get('/create','BlogController@index');
    Route::get('/update/{id?}','BlogController@index');
    Route::post('/delete/{id?}','BlogController@index')->name('blog.delete');
    Route::post('/onoff/{id?}','BlogController@onoff')->name('blog.onoff');
    Route::post('/store','BlogController@store');
});
