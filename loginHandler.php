<?php
session_start(); 
require_once "Dao.php";

echo "In loging handler <br>";

$dao = new Dao();
$login = $dao->login($_POST['Uname'], $_POST['pw']);

if($login == false){
    $_SESSION['auth'] = false;
    echo "No user";
}else{
    $_SESSION['auth'] = true;
    header("Location: http://localhost/index.php");
}

?>