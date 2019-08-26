<?php 
    /*---Setting Global Variables to avoid undefine variables----*/
      $imagepath = "images";     

     /*---Database Connection----*/
    include("DB_connect.php");
    
    /*---isset when all input value is set to send to the server ----*/
    if(isset($_POST['submit'])) 
    {   
        $firstname  = $_POST['fname'];          //input value for First name
        $lastname   = $_POST['lname'];          //input value for last name
        $email      = $_POST['email'];          //input value for email
        $password   = $_POST['password'];       //input value for password
        $cpassword  = $_POST['cpassword'];      //input value for cpassword    
            
         /*---configuration for uploading images or files----*/
        $image      = $_FILES['images']['name'];        //image name           
        $tmp_image  = $_FILES['images']['tmp_name'];    //temporary image name
        $tmp_size   = $_FILES['images']['size'];        //size   
       

        /*---Checking the Forms Variables Please remove the comment code below for testing purposes---*/
        /*
        echo    $firstname."<br> ".
                $lastname."<br>". 
                $email."<br>".
                $password."<br>". 
                $cpassword."<br>".
                $image."<br>".
                $tmp_image."<br>";
        */      
      
        /*--Validatinf the Form is the user Enters Correctly-*/
        if(strlen($firstname) < 3)
        { 
            echo '<script language="javascript">';
            echo 'alert("Firstname is to short!")';
            echo '</script>';  
        }
        else if(strlen($lastname) < 3)
        { 
           
            echo '<script language="javascript">';
            echo 'alert("Lastname is to short!")';
            echo '</script>';  
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
     
            echo '<script language="javascript">';
            echo 'alert("Please enter valid email")';
            echo '</script>';  
        }
        else if(strlen($password) < 8)
        {
            

            echo '<script language="javascript">';
            echo 'alert("Password must generate greater then 8 characters")';
            echo '</script>';  
        }
        else if($password !== $cpassword)
        {
          
            echo '<script language="javascript">';
            echo 'alert("Password not match")';
            echo '</script>';
             
        }
        else if($image == "")
        {
            echo '<script language="javascript">';
            echo 'alert("Please upload image")';
            echo '</script>';  
        }
        else
        {
            /*-IF ALL INPUT ARE CORRECT WE CAN NOW INSERT TO THE DATABASE!-*/

            /*Preparing the Insert QUERY COMMAND*/
            $insert_DB_Query = "INSERT INTO users(firstName, lastName, email, password, image) VALUES ('$firstname','$lastname', '$email', '$password', '$image')";
           
         
                /*Command IF FILE UPLOAD IS SUCCESSFUL*/ 
                if(move_uploaded_file($tmp_image,"$imagepath/$image")) 
                {   
                    /*Activatiing the Insert Query Command*/ 
                    mysqli_query($connect, $insert_DB_Query); 
                    
                    /*PROMPT FOR INSERT DB SUCCESS*/ 
                    echo '<script language="javascript">';
                    echo 'alert("YOU ARE SUCCESSFULLY REGISTER!")';
                    echo '</script>';  
                }  
                else
                {   
                    echo '<script language="javascript">';
                    echo 'alert("Image is not uploaded")';
                    echo '</script>';  
                }  
         
            
        }
    } 
   else
   { 
        /*---If no Values on the forms----*/
        /*
        echo '<script language="javascript">';
        echo 'alert("no Valuers")';
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

           <div id="formDiv">
               <!---enctype will allow user to upload images & files---->
               <form method="POST" action="index.php" enctype="multipart/form-data" >
                    
                    <label>First Name: </label><br>
                    <input type="text" name="fname" /><br><br>
                      
                    <label>Last Name: </label><br>
                    <input type="text" name="lname" /><br><br>

                    <label>Email: </label><br>
                    <input type="text" name="email" /><br><br>

                    <label>Password: </label><br>
                    <input type="password" name="password" /><br><br>

                    <label>Confirmed Password: </label><br>  
                    <input type="password" name="cpassword"/><br><br>  
                    
                    <label>Upload image: </label><br>
                    <input type="file" name="images"/><br><br>  

                    <input type="submit" name="submit"/><br>

               </form>

           </div>

        </div>

    </body>
</html>