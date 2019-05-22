<?php

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

//Route our blog
Route::get('/perpus','BlogController@home');
Route::get('/perpus/add', 'BlogController@add');
Route::get('/perpus/view', 'BlogController@view');
Route::post('/perpus/store', 'BlogController@store');

//edit
Route::get('/perpus/edit/{id}', 'BlogController@edit');
//update
Route::post('/perpus/update', 'BlogController@update');
//delete
Route::get('/perpus/delete/{id}', 'BlogController@delete');