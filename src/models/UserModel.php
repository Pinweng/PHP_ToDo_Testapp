<?php

  require_once("src/models/BaseModel.php");

  class UserModel extends BaseModel{
    public function getUsers(){
      $query = "SELECT * FROM kunden";
      $stmt = $this->conn->prepare($query);
      $stmt->execute();

      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
  }