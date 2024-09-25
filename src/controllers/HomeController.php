<?php

namespace App\controllers;
use App\controllers\BaseController;
use App\models\TodoModel;
use App\components\TodoCard\TodoCard;

class HomeController extends BaseController{
  public function index(){
    $todoModel = new TodoModel();
    $todos = $todoModel->getTodos();


    $cards = [];

    foreach($todos as $todo){
      
      $CardObj = new TodoCard($todo["name"], $todo["status"], $todo["descr"] , $todo["id"]);
      $card = $CardObj->createCard();

      array_push($cards, $card);
    }


    $this->view("home", ["message" => "Hello World", "cards" => $cards]);
  }
}