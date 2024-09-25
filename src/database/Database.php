<?php

namespace App\database;

  class Database{
    private $host = "localhost";
    private $db_name = "todo";
    private $username = "root";
    private $password = "";
    private $conn;

    public function getConnection(){
      $this->conn = null;
      try{
        $this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
        $this->username, $this->password);

        $this->conn->exec("set names utf8"); 
      }
        catch(\PDOException $exception){
          echo "Database connetion error: " . $exception->getMessage();

        }

      return $this->conn;
    }
    
  }