<?php
  session_start(); 

require_once "Dao.php";
$dao = new Dao();
$flag = 0;
$_SESSION['badCreate'] = array();

//VALIDATION
if(empty($_POST['Uname'])){
  $_SESSION['badCreate'][] = "Please enter a username";
  $flag = 1;
}

$notFree = $dao->checkUser(htmlspecialchars($_POST['Uname']));
if($notFree){
  $_SESSION['badCreate'][] = "Username is taken";
  $flag = 1;
}

if(empty($_POST['pw'])){
  $_SESSION['badCreate'][] = "Please enter a password";
  $flag = 1;
}

if(empty($_POST['cpw'])){
  $_SESSION['badCreate'][] = "Please confirm your password";
  $flag = 1;
}

if(empty($_POST['Dname'])){
  $_SESSION['badCreate'][] = "Please enter your driver name";
  $flag = 1;
}

if(!empty($_POST['pw']) && !empty($_POST['cpw']) && ($_POST['pw'] != $_POST['cpw'])){
  $_SESSION['badCreate'][] = "Passwords did not match";
  $flag = 1;
}

if($flag == 1){
  $_SESSION['create'] = false;
  $_SESSION['Uname'] = $_POST['Uname'];
  $_SESSION['pw'] = $_POST['pw'];
  $_SESSION['cpw'] = $_POST['cpw'];
  $_SESSION['Dname'] = $_POST['Dname'];
  $_SESSION['badCreate'][] = "Account creation failed";
  header("Location: createuser.php");    
}else{
  $_SESSION['create'] = true;
  $password = hash("sha256", htmlspecialchars($_POST['pw']) . "sajdhak82u39alkh109a1");
  $user = $dao->addUser(htmlspecialchars($_POST['Uname']), $password, htmlspecialchars($_POST['Dname']));
  header("Location: login.php");    
}
?>