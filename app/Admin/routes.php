<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();


Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('products','ProductController');
    $router->resource('slider','SliderController');
    $router->resource('tags','TagController');
    $router->resource('groups','GroupController');
    $router->resource('sizes','SizeController');
    $router->resource('colors','ColorController');
    $router->resource('categories','CategoryController');
    $router->resource('informations','InformationController');
    $router->resource('blogs','BlogController');
});
