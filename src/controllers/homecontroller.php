<?php

require_once("src\controllers\BaseController.php");

class Homecontroller extends BaseController{
  public function index(){
    $this->view("home", ["message" => "Hello World"]);
  }
}