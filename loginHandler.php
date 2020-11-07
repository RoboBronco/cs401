<?php
session_start(); 
require_once "Dao.php";
$_SESSION['bad'] = array();
$flag = 0;

//VALIDATION
if(empty($_POST['Uname'])){
    $_SESSION['bad'][] = "Please enter a username";
    $flag = 1;
}

if(empty($_POST['pw'])){
    $_SESSION['bad'][] = "Please enter a password";
    $flag = 1;
}

if($flag == 1){
    $_SESSION['auth'] = false;
    $_SESSION['Uname'] = $_POST['Uname'];
    header("Location: http://localhost/login.php");
    exit();
}else{
    $dao = new Dao();
    $login = $dao->login($_POST['Uname'], $_POST['pw']);
    if($login == false){
        $_SESSION['auth'] = false;
        $_SESSION['Uname'] = $_POST['Uname'];
        $_SESSION['bad'][] = "Incorrect username or password";
        header("Location: http://localhost/login.php");
    }else{
        $_SESSION['auth'] = true;
        header("Location: http://localhost/index.php");
    }
}

exit();
?>