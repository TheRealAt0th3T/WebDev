<?php
  session_start();

  require_once 'KLogger.php';
  $logger = new KLogger ( "log.txt" , KLogger::WARN );
  $errors = array();

  if (count($errors) > 0) {
   //$logger->LogWarn(print_r($errors,1));
    $_SESSION['messages'] = $errors;
    $_SESSION['class'] = "bad_mojo";
    $_SESSION['form_data'] = $_POST;
    header('Location: comments.php');
    exit;
  } else {
    $_SESSION['class'] = "positive_vibes";
    $_SESSION['messages'] = array("Thanks for posting!");
    $_SESSION['form_data'] = array();
  }

  require_once 'Dao.php';
  $dao = new Dao();
  $dao->insertComment($_POST['firstname'], $_POST['lastname'], $_POST['lastname']);
  header('Location: comments.php');
  exit;
