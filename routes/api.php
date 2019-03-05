<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('user', 'UserController@getAuthenticatedUser');

    Route::get('closed', 'DataController@closed');

    Route::post('countries', 'CountryController@create');

    Route::get('countries', 'CountryController@show');


    Route::put('countries', 'CountryController@update');

    Route::put('countries/{id}', 'CountryController@update');

    Route::delete('countries', 'CountryController@destroy');

    Route::delete('countries/{id}', 'CountryController@destroy');

    Route::get('activities', 'LogController@show');

    Route::get('activities/{size}', 'LogController@show');

});
