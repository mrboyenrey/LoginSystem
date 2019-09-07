<?php
     
    /* THIS code will connect to the database please provide valid arguement to mysqli_connect function() */
    /* ARGUEMENTS IN THE FUNCTIONS
     * First    :Servername or IP
     * Second   :Server Username
     * Third    :Server Password
     * Fourth   :Database Name in your Server
    */


    $connect = mysqli_connect("localhost","root","","loginsystem");
 
    /* THIS code here will check the DBS connection correctly */
    if(mysqli_connect_errno())
    {
         /* -- THIS Code will appear connection is not working*/
        echo '<script language="javascript">'; 
        echo 'alert("ERROR Connection ")';
        echo '</script>';
    }
    else 
    {   
        /* -- THIS A TESTING CODE THAT IT IS CONNECTED CORRECTLY, ONCE IT SUCCESSFULL MAKE COMMENT (DONT MAKE THIS CODE APPEAR TO YOUR USER)
        echo '<script language="javascript">';
        echo 'alert("DB Connection Succesful!")';
        echo '</script>';
        */
    }

    
?>
