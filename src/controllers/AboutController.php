<?php

require_once("src/controllers/BaseController.php");

class AboutController extends BaseController{
  public function index(){
    $this->view("about", ["msg" => "Hello from about", "name" => "Hans"]);
  }
}