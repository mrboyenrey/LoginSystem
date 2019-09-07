<?php
    
    //Database Connecttion
    include("DB_connect.php");
    include("function.php"); 

    if(logged_in())
    {
        echo "you login <br>";

?>
        <!--html code-->      
        <a href="logout.php"><input type="button" name="logout" value="Logout"/></a>  
        <!--end html code--> 
<?php

    }
    else
    {
        // user should not go to profile page if he is not login.
        header("location:login.php");
        exit();  
    }   

    





 ?> 