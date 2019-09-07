<?php

 //Database Connecttion
 include("DB_connect.php");
 include("function.php"); 

//if user is already log-in it should not go back to the homepage
if(logged_in())
{
    header("location:profile.php");
    exit();  
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login System</title>
</head>

<body>
    <ul>
  
        <li><a href="http://localhost/Login-System/">Home</a></li> 
        <li><a href="login.php">Login</a></li>
        <li><a href="registration.php">Register</a></li>   
    </ul>
    <br>
    
    <?php
    phpinfo();
    ?>
</body>

</html>