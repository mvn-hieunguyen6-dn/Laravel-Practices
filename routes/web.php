<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InforController;

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


Route::get('/infor','InforController@index')->name('Infor.index');
Route::get('/infor/create','InforController@create')->name('Infor.create');
Route::post('/infor/create','InforController@store')->name('Infor.store');
Route::get('/infor/edit/{id}','InforController@edit')->name('Infor.edit');
Route::post('/infor/update/{id}','InforController@update')->name('Infor.update');
Route::get('/infor/destroy/{id}','InforController@destroy')->name('Infor.destroy');


