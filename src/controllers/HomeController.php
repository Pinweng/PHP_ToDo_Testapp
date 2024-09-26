<?php

namespace App\controllers;

use App\controllers\BaseController;
use App\models\TodoModel;
use App\components\TodoCard\TodoCard;

class HomeController extends BaseController
{
  public function index()
  {
    $todoModel = new TodoModel();
    $todos = $todoModel->getTodos();


    $cards = [];


    foreach ($todos as $todo) {
      $CardObj = new TodoCard($todo["name"], $todo["status"], $todo["descr"], $todo["id"]);
      $card = $CardObj->createCard();
      array_push($cards, $card);
    }


    $this->view("home", ["message" => "Hello World", "cards" => $cards]);
  }


  public function posttodo()
  {
    $todoModel = new TodoModel();


    if (array_key_exists("done", $_POST)) {
      $todoModel->updateTodo(1, $_POST["done"]);
    }

    if (array_key_exists("pending", $_POST)) {
      $todoModel->updateTodo(-1, $_POST["pending"]);
    }

    if (array_key_exists("create", $_POST)) {
      $todoModel->insertTodo($_POST["name"], $_POST["descr"]);
    }

    if (array_key_exists("delete", $_POST)) {
      $todoModel->deleteTodo($_POST["delete"]);
    }

    $todos = $todoModel->getTodos();
    $cards = [];
    foreach ($todos as $todo) {
      $CardObj = new TodoCard($todo["name"], $todo["status"], $todo["descr"], $todo["id"]);
      $card = $CardObj->createCard();
      array_push($cards, $card);
    }
    $this->view("home", ["message" => "Hello World", "cards" => $cards]);
  }
}
