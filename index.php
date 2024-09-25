<?php
  require_once("Router.php");
  require_once("src/controllers/HomeController.php");
  require_once("src/controllers/AboutController.php");
  require_once("src/controllers/BooksController.php");
  

  $router = new Router();

  $router->add("GET", "/PHP_ToDo_Testapp/", "HomeController@index");
  $router->add("GET", "/PHP_ToDo_Testapp/about", "AboutController@index");
  $router->add("GET", "/PHP_ToDo_Testapp/books/{id}", "BooksController@index");
  

  $router->dispatch();