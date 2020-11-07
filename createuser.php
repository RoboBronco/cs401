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
          <input type="text" name="Uname" id="Uname" placeholder="Username" value="<?php if(isset($_SESSION['Uname'])){ echo $_SESSION['Uname'];}?>">    
          <br><br>    
          <label for="pw"><b>Password<br>     
          </b>    
          </label>    
          <input type="Password" name="pw" id="pw" placeholder="Password" value="<?php if(isset($_SESSION['pw'])){ echo $_SESSION['pw'];}?>">    
          <br><br>
          <label for="cpw"><b>Confirm Password<br>     
          </b>    
          </label>    
          <input type="Password" name="cpw" id="cpw" placeholder="Confirm Password" value="<?php if(isset($_SESSION['cpw'])){ echo $_SESSION['cpw'];}?>">    
          <br><br>        
          <label for="Name"><b>Driver Name<br>     
          </b>    
          </label>    
          <input type="Dname" name="Dname" id="Dname" placeholder="Driver Name" value="<?php if(isset($_SESSION['Dname'])){ echo $_SESSION['Dname'];}?>">    
          <br><br>
          <?php
            if (isset($_SESSION['create'])) {
              foreach ($_SESSION['badCreate'] as $message) {
                echo "<div class='bad'>{$message}</div>";
              }
            }
          ?>
          <br><br>   
          <input type="submit" name="submit" id="submit" value="Create User">       
          <br><br>    
          <br><br>
        </form>     
        <?php require_once "footer.php";?>

  </body>

</html>