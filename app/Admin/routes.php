<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('companies', 'CompanyController');
    $router->resource('tidings', 'TidingController');
    $router->resource('teachers', 'TeacherController');
    $router->resource('courses', 'CourseController');
    $router->resource('curricula', 'CurriculumController');
    $router->resource('careers', 'CareerController');
    $router->resource('aboutus', 'AboutController');
    $router->resource('histories', 'HistoryController');
});
