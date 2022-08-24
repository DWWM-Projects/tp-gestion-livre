<?php

use Tp\Books\App;

require __DIR__.'/../vendor/autoload.php';

define('BASE_URL', '/myphp-oo/13-tp-gestion/public');

$app = new App();
$app->setBasePath(BASE_URL);

$app->addRoutes([
    ['GET', '/book', 'BookController@list'],
    // ['GET', '/', 'HomeController@index'],    
    // ['GET|POST', '/user/create', 'UserController@create'],
    // ['GET', '/user/[:id]', 'UserController@show'],
]);

$app->run();
