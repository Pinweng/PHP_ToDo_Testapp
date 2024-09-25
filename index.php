<?php
  require_once("Router.php");

  $router = new Router();

  $router->add("GET", "/PHP_ToDo_Testapp/{id}", "HomeController@index");
  

  $router->dispatch();