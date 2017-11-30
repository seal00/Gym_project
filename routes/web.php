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

Auth::routes();
//Route::get('/', 'HomeController@index');
Route::get('/', 'PagesController@index');
Route::get('/home', 'HomeController@index');
//Route::get('/about', 'PagesController@about');
//Route::get('/services', 'PagesController@services');
//Route::get('/register', 'PessoaController@index');
//Route::post('/register', 'PessoaController@add');
/*Route::get('/admin/', ['middleware' => 'admin', function () {  
    return view('admin.admin');
}]);*/
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/', 'AdminController@admin');
    //another routes...
});

Route::group(['middleware' => 'instruct'], function () {
    Route::get('/aulas/', 'InstrutorController@index');
    //another routes...
});

/* Route::get('/users/{id}', function($id){
    return $id.', You are logged in!';
}); */
//Auth::routes();

//Route::get('/home', 'HomeController@index');
