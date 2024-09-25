<?php

namespace App\models;

use App\database\Database;

  class BaseModel{
    protected $conn;

    public function __construct(){
      $database = new Database();
      $this->conn = $database->getConnection();
    }
  }