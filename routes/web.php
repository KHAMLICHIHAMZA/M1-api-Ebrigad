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

//
Route::get('/TypeInterventions','TypeInterventionsController@getAllTypes')->name('AllTypes');
//
Route::get('/Engins','EnginsController@getAllEngins')->name('AllEngins');
Route::get('/RolesEngins','EnginsController@getAllRolesEngins')->name('AllRolesEngins');
Route::get('/Engin/{TvLibelle}','EnginsController@getEngin')->name('getCodeEngin');
//
Route::get('/NamesRolesEngin/{TvCode}','EnginsController@getRolesEngin')->name('getNamesRolesEngin');

Route::get('/Users', 'UsersController@getAllUser')->name('AllUsers');
Route::get('/Users/FindByLogin/{PCODE}', 'UsersController@FindUserByLogin')->name('FindUserByLogin');
Route::get('/Users/FindByID/{PID}', 'UsersController@FindUserByID')->name('FindUserByID');

Route::get('/Users/DestroyByID/{PID}', 'UsersController@delete')->name('delete');

Route::get('/Users/update', 'UsersController@update')->name('update');

Route::put('users/{id}', function ($id) {
    
});
