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
Route::post('user/login', 'UserController@login');
Route::post('user/register', 'UserController@register');
Route::post('user/profile', 'UserController@getAuthenticatedUser');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*  SENATORS API LIST */

Route::get('/senator/all', 'SenatorController@all');

Route::get('/senator/state/{state}', 'SenatorController@filterState');

Route::get('/senator/limit/{limit}', 'SenatorController@limit');

Route::get('/senator/geozone/{geozone}', 'SenatorController@filterZone');

Route::get('/senator/nameprefix/{alphabet}', 'SenatorController@filterByAlphabet');

Route::get('/senator/name/{name}', 'SenatorController@filterByName');

Route::get('/senator/party/{party}', 'SenatorController@filterByParty');

// Done 09/12/2019

// Route::get('/senator/year/{year}', 'SenatorController@filterByYear');

Route::put('/senator/edit/{senator}', 'SenatorController@update');

Route::delete('/senator/del/{senator}', 'SenatorController@destroy');

Route::post('/senator/add','SenatorController@Store');



// Route::apiResource('/senator', 'SenatorController');
