<?php

  require_once("src/database/Database.php");

  class BaseModel{
    protected $conn;

    public function __construct(){
      $database = new Database();
      $this->conn = $database->getConnection();
    }
  }