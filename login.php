<?php
 //Database Connecttion
 include("DB_connect.php");
 include("function.php"); 

 //if user is already log-in it should not go back to the login page
if(logged_in())
{
    header("location:profile.php");
    exit();  
}

 /*---isset when all input value is set to send to the server ----*/
 if(isset($_POST['submit']))   
 {

    $email      = mysqli_real_escape_string($connect, $_POST['email']);                 //input value for email
    $password   = mysqli_real_escape_string($connect, $_POST['password']);              //input vlaue for password

    /*
    echo   $email."<br>".
           $password."<br>";  
    */                           
                if(email_exist($email,$connect) )  // function email_exist will check if email exist
                {
                  
                     
                    if(md5($password) !==  password_verification($email, $connect)) // function password_verification will check and fetch and match result the password
                    {
                       
                    }
                    else
                    {   
                     
                        $_SESSION['email'] = $email;    //this code is important to start the session of the user when login. add it once
                        header("location:profile.php"); // this header function to move the user to the profile page.
                        

                      /* this code below will test if the password match 
                        echo '<script language="javascript">';
                        echo 'alert("Password is Correct")';        
                        echo '</script>';
                       */
                    }

                }
                else
                {
                    echo '<script language="javascript">';
                    echo 'alert("Email does not exist")';       
                    echo '</script>';
                }

 }
 else
 { 
      /*---If no Values on the forms----*/
      /*
      echo '<script language="javascript">';
      echo 'alert("no Values in the Form")';
      echo '</script>';  
      */   
 }

   


?>

<!doctype html>
<html lang="en">
 
    <head>
        <meta charset="utf-8">
    
        <title>Registration Page</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>

    <body>   
       
        <div id="wrapper"> 
            <div>
                <center> 
                <h2> LOGIN HERE</h2> 
                </center> 
            </div>
           <div id="formDiv">
               <!---enctype will allow user to upload images & files---->
               <form method="POST" action="login.php" >
                    
                    <label>Email </label><br>
                    <input type="text" name="email" /><br><br> 
                      
                    <label>Password </label><br>
                    <input type="password" name="password" /><br>

                    <label>Keep me log in </label><br>
                    <input type="checkbox" name="keep"><br>

                    <input type="submit" name="submit" value="Login"/> 
                    <a href="registration.php"><input type="button" name="register" value="Register"/></a> 
                    <a href="index.php"><input type="button" name="register" value="Home"/></a>  
               </form>

               
           </div>

        </div>

    </body>
</html>