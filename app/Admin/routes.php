<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('editor/pages', PageController::class);
    $router->resource('editor/catalogs', CatalogController::class);
    $router->resource('editor/products', ProductController::class);
});
