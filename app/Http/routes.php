<?php
/** @var Illuminate\Routing\Router $router */

// public routes
$router->get('/', 'PublicController@index');

$router->group(['prefix' => 'account', 'middleware' => 'auth'], function (\Illuminate\Routing\Router $router) {
    $router->get('/', function () {
        return redirect(route('account.monitors.index'));
    });

    $router->resource('monitors', 'MonitorController', ['except' => ['show']]);
    $router->resource('warnings', 'WarningController', ['only' => ['index']]);
    $router->resource('integrations', 'IntegrationController');
});


// Authentication routes
$router->get('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@getLogin']);
$router->post('auth/login', 'Auth\AuthController@postLogin');
$router->get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes
$router->get('auth/register', ['as' => 'auth.register', 'uses' =>  'Auth\AuthController@getRegister']);
$router->post('auth/register', 'Auth\AuthController@postRegister');

// ping routes
$router->get('{monitors}/run', ['as' => 'run', 'uses' => 'ApiController@run']);
$router->get('{monitors}/complete', ['as' => 'complete', 'uses' => 'ApiController@complete']);
$router->get('{monitors}/fail', ['as' => 'fail', 'uses' => 'ApiController@fail']);
