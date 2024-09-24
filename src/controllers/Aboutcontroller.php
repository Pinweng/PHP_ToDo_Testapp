<?php

require_once("src\controllers\BaseController.php");

class Aboutcontroller extends BaseController{
  public function index(){
    $this->view("about", ["msg" => "Hello from About", "name" => "Hans"]);
  }
}