<?php

require_once("src/controllers/BaseController.php");

class HomeController extends BaseController{
  public function index(){
    $this->view("home", ["message" => "Hello World"]);
  }
}