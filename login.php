<?php

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
                <h2> REGISTRATION FORMS </h2> 
                </center> 
            </div>
           <div id="formDiv">
               <!---enctype will allow user to upload images & files---->
               <form method="POST" action="login.php" enctype="multipart/form-data" >
                    
                    <label>Email </label><br>
                    <input type="text" name="email" /><br><br> 
                      
                    <label>Password </label><br>
                    <input type="password" name="password" /><br><br>

                    <input type="submit" name="submit"/><br>

               </form>

           </div>

        </div>

    </body>
</html>