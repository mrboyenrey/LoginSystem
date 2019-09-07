<?php
   
   /***LOG IN validation for  email function*/
   function email_exist($email, $connect)
   {

        $sql_email = "SELECT * FROM users WHERE email='$email'"; //Query code to target the email records in the database
        $res_email = mysqli_query($connect, $sql_email);         //Execution Query Code

        if(mysqli_num_rows($res_email) > 0)
        {
            return true;
        } 
        else
        {
            return false;  
        }
   }

   /***LOG IN validation for password function*/
   function password_verification($email, $connect) 
   {

        $password_from_email   =   "SELECT password FROM users WHERE email='$email'";  // Qyery code to retrieve password
        $result_password       =   mysqli_query($connect, $password_from_email );     // Query Code Execution 
        $retrieve_password     =   mysqli_fetch_assoc($result_password);             // Fetch or Retrieving the password

        return  $retrieve_password['password']; 
   }

   /*****LOG-IN checking if user is log in or not*****/
   function logged_in()
   {
       if(isset($_SESSION['email']))
       { return true; } else { return false;}
   }


?>