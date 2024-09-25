<?php
  require_once("Router.php");
  require_once("src/controllers/HomeController.php");
  

  $router = new Router();

  $router->add("GET", "/PHP_ToDo_Testapp/", "HomeController@index");
  

  $router->dispatch();