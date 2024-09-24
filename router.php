<?php

class Router{

  private $routes =[];
  public function add($method, $path, $controllerAction){
    $this->routes[$method][$path] = $controllerAction;

    print_r($this->routes);
  }

  public function dispatach(){
    $method = $_SERVER["REQUEST_METHOD"];
    $path = $_SERVER["REQUEST_URI"];
  
    foreach($this->routes[$method] ?? [] as $route => $controllerAction){
      
      if(preg_match($this->formatRoute($route), $path, $matches)){
        array_shift($matches);
        list($class, $action) = explode("@", $controllerAction);
        
        if(class_exists($class) && method_exists($class, $action)){
          return call_user_func_array([new $class, $action], $matches);
        }
      }

      http_response_code(404);
      echo "404 Not Found";


    }
  }

  public function formatRoute($route){
    $route = preg_replace('/\{([^\/]+)\}/', '(?P<$1>[^/]+)', $route);
    return "#^$route$#";
  }
}