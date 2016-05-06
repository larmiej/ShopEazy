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




Route::auth();

//Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

//Route::group(['middleware' => ['auth.basic']], function () {
    Route::group(array('prefix' => 'api'), function(){

        Route::resource('/items', 'RESTapi\apiItemsController');

        Route::get('/version', 'RESTapi\apiItemsController@version');

        Route::get('/test', function () {
            return "Welcome to API";
        });
    });
//});