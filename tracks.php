<?php
session_start();
	$thisPage = "tracks";
  require_once "nav.php";
  require_once "Dao.php";
  require_once 'table.php';
?>
<html>
<head>
      <link href="login.css" type="text/css" rel="stylesheet" />	
	</head>
	<body>
  <?php

    renderTrackTable();

  ?>


    <?php require_once "footer.php";?>

  </body>

</html>