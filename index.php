<?php

#https://www.php-fig.org/psr/psr-4/
require_once("autoloader.php");

use App\router\Router;
use App\controllers\HomeController;


$router = new Router();

$router->add("GET", "/PHP_ToDo_Testapp/", "HomeController@index");
$router->add("POST", "/PHP_ToDo_Testapp/", "HomeController@posttodo");

$router->dispatch();
