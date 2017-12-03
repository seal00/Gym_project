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
Route::get('/dadosPessoais', 'DadospessoaisController@dadosP');
Route::get('/pt', 'PTController@pT');
Route::get('/pagamentos', 'PagamentosController@pagamentos');
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

/*Route::get('/', function () {
    if(Auth::check()) {
        return redirect('home');
    }
    return view('index');
})->name('home');*/

Route::get('/users/{id}', function($id){
    return $id.', You are logged in!';
});
//Auth::routes();

//Route::get('/home', 'HomeController@index');
