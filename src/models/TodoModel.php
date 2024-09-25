<?php

namespace App\models;
use App\models\BaseModel;
use PDO;

class TodoModel extends BaseModel{

  //Get all Todos
  public function getTodos(){
    $query = "SELECT * FROM todos";
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }
}