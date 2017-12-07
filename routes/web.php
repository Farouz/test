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
//home route
Route::get('/','UsersController@index');
//Login ,register ,logout Routes
Route::get('register','UsersController@newUser');
Route::post('register','UsersController@create');
Route::get('login','UsersController@login');
Route::post('login','UsersController@loginIn');
Route::get('/logout','UsersController@logout');
//Routes of admin
Route::group(['middleware'=>'isAdmin'],function (){
    Route::get('index','CategoriesController@index');
    Route::get('/admin/{id}/destroy','CategoriesController@destroy');
    Route::post('/create','CategoriesController@create');
    Route::get('/category/{id}','CategoriesController@show');
});
//Route for search
Route::post('/search','UsersController@search');