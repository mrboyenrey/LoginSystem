<?php
     

    $connect = mysqli_connect("localhost","root","","loginsystem");
 
    if(mysqli_connect_errno())
    {
        echo '<script language="javascript">';
        echo 'alert("ERROR Connection ")';
        echo '</script>';
    }
    else 
    {
        /*
        echo '<script language="javascript">';
        echo 'alert("DB Connection Succesful!")';
        echo '</script>';
        */
    }

    
?>
