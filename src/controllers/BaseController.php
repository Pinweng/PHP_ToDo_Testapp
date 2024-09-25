<?php

class BaseController{
  protected function view($viewName, $date = []){
    extract($data);
    require_once "src/views/{$viewName}.php";
  }
}