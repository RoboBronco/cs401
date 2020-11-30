<?php
  session_start(); 
  $thisPage = "account";
  require_once "nav.php";

  if(!$_SESSION['auth']){
    header('Location: login.php');
  }

echo "Welcome to your account!";

?>

<div>
<a href="logout.php">Logout</a>
</div>