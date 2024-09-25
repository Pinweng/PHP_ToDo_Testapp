<?php

require_once("src/controllers/BaseController.php");

class BooksController extends BaseController{
  public function index($id){
    $this->view("books", ["id" => $id]);
  }
}