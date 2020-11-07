<?php
  session_start(); 

	$thisPage = "leagues";
  require_once "nav.php";
  require_once "Dao.php";
  require_once 'table.php';

  #$dao = new Dao(); 
  
  #renderTable();
?>
<html>
  <head>
      <link href="login.css" type="text/css" rel="stylesheet" />	
	</head>
	<body>
  <?php

    renderTable();

  ?>


    <?php require_once "footer.php";?>

  </body>

</html>