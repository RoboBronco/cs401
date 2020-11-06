<?php
  session_start(); 

	$thisPage = "leagues";
  require_once "nav.php";
  require_once "Dao.php";
  $dao = new Dao();
?>
<html>
	<body>
    <p>There's a spreadsheet here, but since I don't have it made *shrug*
    <br>Like it's really just a spreadsheet from my database, nothing else.</p>
    <?php require_once "footer.php";?>

  </body>

</html>