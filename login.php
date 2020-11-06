<?php
  session_start(); 
	$thisPage = "login";
  require_once "nav.php";
?>
<html>
  <head>
      <link href="login.css" type="text/css" rel="stylesheet" />	
	</head>
	<body>

        <div class="login">    
        <form id="login" method="post" action="loginHandler.php">    
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
            <input type="submit" name="submit" id="submit" value="Log In">       
            <br><br>    
            <input type="checkbox" id="check">    
            <span>Remember me</span>    
            <br><br>
            <a href="createuser.php">Create Account</a>     
            <a href="forgotpass.php">Forgot Password</a>    
        </form>     
        <?php require_once "footer.php";?>

  </body>

</html>