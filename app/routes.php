<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('hehe');
});
Route::get('/cgindex/{id}','IndexController@index1')->where(array('id' => '[0-9]+',));
Route::get('/cgindex2/{id}',['middleware' => 'age','uses' => 'IndexController@index2']);
