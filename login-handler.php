<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  }

  include_once 'Dao.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  // check the username and password
  require_once 'Dao.php';
  $dao = new Dao();

  $_SESSION['authenticated'] = $dao->userExist($username, $password);
  if ($_SESSION['authenticated']) {
      $_SESSION['logged_in'] = $username;
     header('Location: index.php');
     exit;
  } else {
      $_SESSION['errors']['userDoesNotExist'] = "user doesnt exist";
      $_SESSION['loginFail'] = true;
      $_SESSION['presets'] = $_POST;
      header('Location: login.php');
      exit;
  }
  ?>