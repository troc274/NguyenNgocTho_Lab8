<?php
use App\Http\Controllers\employess;

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


Route::get('insert', 'employess@form_insert');

Route::get('store', 'employess@store');

Route::get('display', 'employess@index');

Route::get('edit/{id}', 'employess@form_edit');

Route::post('save/{id}', 'employess@update');

Route::get('delete/{id}', 'employess@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
