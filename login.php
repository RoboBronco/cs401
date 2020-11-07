<?php
  session_start(); 
	$thisPage = "login";
  require_once "nav.php";

  if(isset($_SESSION['create'])){
    echo "New user successfully created!";
  }
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
            <input type="text" name="Uname" id="Uname" placeholder="Username" value="<?php if(isset($_SESSION['Uname'])){ echo $_SESSION['Uname'];}?>">   
            <br><br>    
            <label for="pw"><b>Password<br>     
            </b>    
            </label>    
            <input type="Password" name="pw" id="pw" placeholder="Password">    
            <br><br>    
            <?php
              if (isset($_SESSION['auth'])) {
                foreach ($_SESSION['bad'] as $message) {
                  echo "<div class='bad'>{$message}</div>";
                }
              }
            ?>
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