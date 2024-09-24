<?php

require_once("Router.php");
require_once("src/controllers/Homecontroller.php");

$router = new Router();
$router->add("GET", "/testus/", "HomeController@index");



$router->dispatch();