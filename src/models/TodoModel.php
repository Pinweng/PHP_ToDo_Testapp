<?php

namespace App\models;
use App\models\BaseModel;
use Exception;
use PDO;

class TodoModel extends BaseModel{

  //Get all Todos
  public function getTodos(){
    $query = "SELECT * FROM todos";

    try{
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    catch(Exception $e){
      echo $e->getMessage();
    }
  }

  public function insertTodo($name, $descr) {
    $query = "INSERT INTO todos (name, descr) VALUES (:name, :descr)";
    
    try {
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':descr', $descr);
        $stmt->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
}
