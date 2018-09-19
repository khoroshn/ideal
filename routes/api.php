<?php

use Illuminate\Http\Request;
\Igaster\LaravelCities\Geo::ApiRoutes();
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::resource('blog','BlogController');
Route::get('products/{id}','ProductController@product');

Route::get('products','ProductController@index');

Route::get('groups','GroupController@index');

Route::get('categories','CategoriesController@index');




//Route::get('/earth/region/{id}','UserController@getRegion');
//Route::get('/earth/citys/{id}','UserController@getCitys');








