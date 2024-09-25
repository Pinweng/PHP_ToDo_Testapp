<?php

namespace App\controllers;
use App\controllers\BaseController;
use App\models\TodoModel;
use App\components\TodoCard\TodoCard;

class HomeController extends BaseController{
  public function index(){
    $todoModel = new TodoModel();
    $todos = $todoModel->getTodos();

    $CardObj = new TodoCard("New Todo", 0, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda nisi inventore unde veniam, illum quidem mollitia illo. Alias, temporibus officia?",1);
    $card = $CardObj->createCard();

    $this->view("home", ["message" => "Hello World", "card" => $card]);
  }
}