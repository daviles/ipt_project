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

Route::get('/','loginController@index');

Route::post('/login', 'loginController@getLogin');

Route::get('/hola-mundo',function(){
    return 'hola mundo soy basukito ak48m';
});


/*
Route::get('/contacto',function($nombre = "manoleto"){
    return view('contacto')
        ->with('nombre', $nombre); //pasa variables a la vista
});*/



//Route::get('/home', 'HomeController@index')->name('home');
