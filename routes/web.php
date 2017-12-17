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
Route::get('/home/{username}', 'PerfilController@index');
Route::get('/home/{username}/perfil', 'PerfilController@perfil');
Route::get('/home/{username}/edit', 'PerfilController@show_edit');
Route::get('/home/{username}/addMorada', 'MoradaController@index');
Route::get('/home/{username}/altEmail', 'PerfilController@email');
Route::get('/home/{username}/altPassword', 'PerfilController@pass');
Route::post('/home/{username}/altPassword', 'PerfilController@edit_pass');
Route::post('/home/{username}/altEmail', 'PerfilController@edit_email');
Route::post('/home/{username}/addMorada', 'MoradaController@add');
Route::post('/home/{username}/edit', 'PerfilController@edit');
Route::post('/home/{username}', 'PerfilController@update_avatar');
Route::get('/services', 'ServicesController@services');

/*Route::get("/home/{username}", function()
{
   return View::make("perfil");
});*/
//Route::get('verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
//Route::get('/about', 'PagesController@about');
//Route::get('/services', 'PagesController@services');
//Route::get('/register', 'PessoaController@index');
//Route::post('/register', 'PessoaController@add');

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
