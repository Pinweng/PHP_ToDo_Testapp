<?php

namespace App\controllers;
use App\controllers\BaseController;

class HomeController extends BaseController{
  public function index(){

    $this->view("home", ["message" => "Hello World"]);
  }
}