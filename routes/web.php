<?php

//One page app START


/*Route::get('/', function(){
    return view('index');
});*/


//One page app END


//Auth
Auth::routes();


//BS4 Controller

Route::get('/', 'bs4Controller@index');

Route::get('cat_init','CategoriesController@init_root');