<?php

if(isset($_SESSION['auth']) && $_SESSION['auth']){
    $auth = 1;
}else{
    $auth = 0;
}
?>

<html>
	<head>
        <link href='https://fonts.googleapis.com/css?family=Racing Sans One' rel='stylesheet'>
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <?php
            if ($thisPage=="index"){
                echo "<title>NA Leagues</title>";
            }
            if ($thisPage=="leagues"){
                echo "<title>NA Leagues - League List</title>";
            }
            if ($thisPage=="drivers"){
                echo "<title>NA Leagues - Drivers</title>";
            }
            if ($thisPage=="tracks"){
                echo "<title>NA Leagues - Tracks</title>";
            }
            if ($thisPage=="login"){
                echo "<title>NA Leagues - Login</title>";
            }
            if ($thisPage=="createUser"){
                echo "<title>NA Leagues - Create User</title>";
            }
            if ($thisPage=="forgotPass"){
                echo "<title>NA Leagues - Forgot Password</title>";
            }
            if ($thisPage=="account"){
                echo "<title>NA Leagues - Account</title>";
            }
        ?>

		<link href="nav.css" type="text/css" rel="stylesheet" />	
	</head>
	<body>
		<h1>
            <a href="index.php"><img src="nalogo.png" alt="NA Logo"></a>
            <?php
                if ($thisPage=="index"){
                    echo "Welcome to NA Leagues!";
                }
                if ($thisPage=="leagues"){
                    echo "League List";
                }
                if ($thisPage=="drivers"){
                    echo "Driver List";
                }
                if ($thisPage=="tracks"){
                    echo "Track List";
                }
                if ($thisPage=="login"){
                    echo "Login";
                }
                if ($thisPage=="createUser"){
                    echo "Create an Account";
                }
                if ($thisPage=="forgotPass"){
                    echo "Password Recovery";
                }
                if ($thisPage=="account"){
                    echo "Welcome to your account!";
                }
            ?>
		</h1>
		<div class="topnav">
            
            <a <?php if ($thisPage=="leagues"){ echo "class='active'"; }?> href="leagues.php">Leagues</a>
            <a <?php if ($thisPage=="drivers"){ echo "class='active'"; }?> href="drivers.php">Drivers</a>
            <a <?php if ($thisPage=="tracks"){ echo "class='active'"; }?>href="tracks.php">Tracks</a>
            <a <?php if ($thisPage=="login" || $thisPage=="account"){ echo "class='active'"; }?>href=<?php if ($auth==0){ echo "'login.php'>Login<"; } else{ echo "'account.php'>Account<"; }?>/a>
         
		</div>