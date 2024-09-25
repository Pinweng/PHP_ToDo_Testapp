<?php

  require_once("src/models/BaseModels.php");

  class UserModel extends BaseModel{
    public function getUsers(){
      $query = "SELECT * FROM user";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }