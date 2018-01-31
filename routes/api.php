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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware'=>'auth:api'], function(){
  //  Route::resource('jobs', 'Api\JobController');
  //  Route::resource('users', 'Api\UserController');

});
    Route::resource('categories', 'Api\CategoryController');
    Route::resource('addresses', 'Api\AddressController');
    Route::resource('users', 'Api\UserController');
    Route::post('uploadImage','Api\UserController@uploadImage');
    Route::get('seekers','Api\UserController@allUsers');
  Route::resource('jobs', 'Api\JobController');
 Route::post('apply', 'Api\UserController@apply');
Route::resource('levels', 'Api\LevelController');
Route::resource('status', 'Api\StatusController');
Route::resource('types', 'Api\TypeController');

Route::post('login','Api\AuthController@login');
Route::post('register','Api\AuthController@register');
Route::get('email/check/{email}', 'Api\UserController@emailCheck');
