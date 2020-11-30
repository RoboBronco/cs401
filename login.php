<?php
  session_start(); 
	$thisPage = "login";
  require_once "nav.php";
?>
<html>
  <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
      <link href="login.css" type="text/css" rel="stylesheet" />
      <script>
          $(document).ready(function(){
            $("#fadeMe").fadeOut(3000);
          });
      </script>
	</head>
	<body>
    <?php
      if(isset($_SESSION['create']) && !isset($_SESSION['done'])){
        $_SESSION['done'] = true;
    ?>
        <div id='fadeMe'><h2>New user successfully created!</h2></div>
    <?php
      }
    ?>
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