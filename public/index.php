<?php
require '../vendor/autoload.php';

use Router\Router;
define('DS', DIRECTORY_SEPARATOR);
define('VIEWS', dirname(__DIR__) . DS . 'views' . DS);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DS);



$path = explode('/project_oop', $_SERVER['REQUEST_URI']);
$path = implode($path);

$router = new Router($path);

$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/posts/:id', 'App\Controllers\BlogController@show');

$router->run();
