<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', 'HomeController@index');
Route::get('/', 'PagesController@index');
Route::get('/home', 'HomeController@index');
//Route::get('/about', 'PagesController@about');
//Route::get('/services', 'PagesController@services');
//Route::get('/trial', 'PagesController@trial');
Auth::routes();

/* Route::get('/users/{id}', function($id){
    return $id.', You are logged in!';
}); */