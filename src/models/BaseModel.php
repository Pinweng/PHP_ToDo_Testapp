<?php

namespace App\models;

use App\database\Database;

  abstract class BaseModel{
    protected $conn;

    public function __construct(){
      $database = new Database();
      $this->conn = $database->getConnection();
    }
  }