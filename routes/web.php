<?php

//One page app START


/*Route::get('/', function(){
    return view('index');
});*/


//One page app END


//Auth
Auth::routes();
/*

Route::get('account', 'UserController@index')->middleware('auth');
Route::get('account/data', 'UserController@data')->middleware('auth');


//oAuth
Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');




Route::resource('/','IndexController',[
    'only'=>['index'],
    'names'=>[
        'index'=>'home'
    ]
]);


Route::resource('shop','ShopController',[
    'only'=>['index'],
    'names'=>[
        'index'=>'shop'
    ]
]);


Route::get('shop/{path}', 'ShopController@show')
->where('path', '[a-zA-Z0-9/_-]+');




Route::resource('products','ProductController',[
    'parameters' => [
        'products' => 'alias'
    ]
]);


//Cart
Route::get('cart/add/{id}', 'CartController@itemAdd');
Route::get('cart/remove/{id}', 'CartController@itemRemove');

Route::get('cart', 'CartController@index');


//Checkout
Route::get('checkout', 'CheckoutController@index');

*/

//BS4 Controller

Route::get('/', 'bs4Controller@index');