<?php

require_once("src/controllers/BaseController.php");
require_once("src/models/UserModel.php");

class HomeController extends BaseController{
  public function index(){
    $userModel = new UserModel();
    $users = $userModel->getUsers();

    $this->view("home", ["message" => "Hello World", "users" => $users]);
  }
}