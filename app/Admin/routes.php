<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('/products', 'HomeController@index');
    $router->get('/stores', 'StoreController@index');
    $router->post('/stores', 'StoreController@update');
    $router->get('/stores/{id}/edit', 'StoreController@edit');

});
