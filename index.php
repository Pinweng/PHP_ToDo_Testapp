<?php

require_once("router.php");

$router = new Router();

$router->add("GET","/PHP_ToDo_Testapp/", "HomeController@index");

$router->dispatach();