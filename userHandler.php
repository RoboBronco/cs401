<?php
  session_start(); 

require_once "Dao.php";
$dao = new Dao();
$user = $dao->addUser($_POST['Uname'], $_POST['pw'], $_POST['Dname']);

header("Location: http://localhost/index.php");    

?>