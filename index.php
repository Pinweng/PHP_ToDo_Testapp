<?php
  require_once("Router.php");

  $router = new Router();

  $router->add("GET", "/PHP_ToDo_Testapp/{id}", "HomeController@index");
  $router->add("GET", "/PHP_ToDo_Testapp/about", "HomeController@index");
  $router->add("GET", "/PHP_ToDo_Testapp/user", "HomeController@getmethode");
  $router->add("POST", "/PHP_ToDo_Testapp/user", "HomeController@postmethode");

  $router->dispatch();