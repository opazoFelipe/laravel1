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

Route::get('/', function () { //Directorio Principal
    return view('welcome');
});

// // Route::get('/nombre', function(){
// //     $nombre = config('app.name'); //This Returns enviroment variables
// //     return $nombre;
// // });

// Route::get('/user/{name}/{age}', 'TestController2@index');
// Route::resource('task', 'TestController3');
Route::get('demo', function(){
    return view('demo');
});

Route::get('user/{user}', 'UserController@show');