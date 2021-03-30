<?php

require_once 'KLogger.php';

class Dao {

  public $dsn = 'mysql:dbname=heroku_62a614f50868c33;host=us-cdbr-east-03.cleardb.com';
  public $user = "bc88ad58264c74";
  public $password = "8e5d8fa3";
  protected $logger;

  /*public function __construct () {
    $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
  }*/

  private function getConnection () {
    try {
        $connection = new PDO($this->dsn, $this->user, $this->password);
        //$this->logger->LogDebug("Got a connection");
    } catch (PDOException $e) {
        $error = 'Connection failed: ' . $e->getMessage();
        //$this->logger->LogError($error);
    }
    return $connection;
  }

  public function userExist ($username, $password) {
    $connection = $this->getConnection();
    try {
        $q = $connection->prepare("select count(*) as total from Users where username = :username and password = :password");
        $q->bindParam(":username", $username);
        $q->bindParam(":password", $password);
        $q->execute();
        $row = $q->fetch();
        if ($row['total'] == 1) {
           //$this->logger->LogInfo("user found!" . print_r($row,1));
           return true;
        } else {
           return false;
        }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }

  }

  public function emailExists($email){
      $connection = $this->getConnection();
      try{
          $q = $connection->prepare("SELECT * FROM Users WHERE email = :email");
          $q ->bindParam(':email', $email);
          $q->execute();
          if($q->fetch()){
              return true;
          }else{
              return false;
          }
      } catch(Exception $e){
          echo print_r($e,1);
          exit;
      }
  }

  public function addUser($firstname, $lastname, $email, $username, $password){
        $connection = $this->getConnection();

        $q = $connection->prepare("INSERT INTO Users (firstname, lastname, username, email, password) values (:firstname, :lastname, :username, :email, :password)");
        $q ->bindParam(':firstname', $firstname);
        $q ->bindParam(':lastname', $lastname);
        $q ->bindParam(':email', $email);
        $q ->bindParam(':username', $username);
        $q ->bindParam(':password', $password);
        try{
            $q->execute();
            return true;
        }catch(Exception $e){
            echo print_r($e,1);
            exit;
        }
  }

  public function insertComment ($name, $comment, $imagePath) {
    //$this->logger->LogInfo("inserting a comment name=[{$name}], comment=[{$comment}]");
    $conn = $this->getConnection();
    $saveQuery = "insert into comment (name, comment, image_path) values (:name, :comment, :image_path)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":name", $name);
    $q->bindParam(":comment", $comment);
    $q->bindParam(":image_path", $imagePath);
    $q->execute();
  }

  public function getCommission() {
    $connection = $this->getConnection();
    try {
        $rows = $connection->query("select name, comment_id, comment, image_path, date_entered from comment order by date_entered desc", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }

}