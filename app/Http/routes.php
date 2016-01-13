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
    return view('welcome');
});

//LoginUser
Route::get('/login','LoginController@index');
Route::post('/login/action','LoginController@show');


Route::group(['middleware'=>'myAuth'],function(){
    //Scrum
    Route::get('/scrum','ScrumController@index');
});

Route::get('/logout','ScrumController@destroy');