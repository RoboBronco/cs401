<?php
  session_start(); 

	$thisPage = "createUser";
  require_once "nav.php";
?>
<html>
  <head>
      <link href="login.css" type="text/css" rel="stylesheet" />	
	</head>
	<body>

        <div class="create">    
        <form id="create" method="post" action="userHandler.php">    
            <label for="Uname"><b>User Name<br>     
            </b>    
            </label>    
            <input type="text" name="Uname" id="Uname" placeholder="Username">    
            <br><br>    
            <label for="pw"><b>Password<br>     
            </b>    
            </label>    
            <input type="Password" name="pw" id="pw" placeholder="Password">    
            <br><br>    
			<label for="Name"><b>Driver Name<br>     
            </b>    
            </label>    
            <input type="Dname" name="Dname" id="Dname" placeholder="Driver Name">    
            <br><br>    
            <input type="submit" name="submit" id="submit" value="Create User">       
            <br><br>    
            <br><br>
        </form>     
        <?php require_once "footer.php";?>

  </body>

</html>