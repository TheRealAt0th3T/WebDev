<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    include_once 'Dao.php';
    $dao = new Dao();

    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $passwordMatch = $_POST['passwordMatch'];

    $errors = array();

    if(!valid_length($username, 1, 26)){
        $errors['username'] = "please provide a valid username";
    }

    if(!valid_length($firstname, 1, 26)){
        $errors['firstname'] = "please provide a valid first name";
    }else if(preg_match('@[0-9]@',$firstname)){
        $errors['firstname'] = "names cannot include numbers";
    }

    if(!valid_length($lastname, 1, 26)){
        $errors['lastname'] = "please provide a valid first name";
    }else if(preg_match('@[0-9]@',$lastname)){
        $errors['lastname'] = "names cannot include numbers";
    }

    if(!valid_length($email, 1, 50)){
        $errors['email'] = "Please provide a valid email.";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Must be a valid email";
    }

    if(!valid_length($password,8,20)){
        $errors['password'] = "Password must be at least 8 characters long";
    }else if ($password != $passwordMatch){
        $errors['passwordMatch'] = "Passwords do not match";
    }else if(!preg_match('@[0-9]@',$password)){ 
        $errors['password'] = "Password must contain at least 1 number";
    }

    function valid_length($input, $min, $max){
        $t = trim($input);
        return (strlen($t)>= $min && strlen($t) <= $max);
    }

    if(empty($errors)){
        try{
            if($dao->emailExists($email)){
                $_SESSION['errors']['emailExists'] = "Email is already registered";
                header('Location: login.php');
                die;
            }else{
                if($dao->addUser($firstname, $lastname,$email,$username,$password)){
                    header('Location: login.php');
                    die;
                }else{
                    $_SESSION['errors']['unexpectedError'] = "Error 404: Unexpected";
                    header('Location: signup.php');
                    die;
                }
            }
        }catch(Exception $e){
            $_SESSION['errors']['unexpectedError'] = "Error 404: Unexpected";
            header('Location: signup.php');
            die;
        }
    }else{
        $_SESSION['errors'] = $errors;
        $_SESSION['signupFail'] = true;
        $_SESSION['form'] = $_POST;
        //echo $_SESSION['form']['firstname'];
        header('Location: signup.php');
            die;
    }

?>