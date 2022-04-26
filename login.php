
<?php

include ("action.php");
echo session_id();
session_start();


?>


<!DOCTYPE html>
<html>
   <head>
       
        <title>Login page</title>

        <link rel="stylesheet" href="design.css">
    <style>
            .red
            {

            color: brown;
            }

    </style>

   </head>

        <body>

            <div class="container2">

                <div class="login_form">
                    <div class='red'><?php  login(); ?></div>
                    <br>

                    <h1>LOGIN </h1>

                    <form method="POST">
                        
                        <label> Username: &nbsp;&nbsp;</label>
                        
                        <input type="text" placeholder="write your username here" name="lusername">
                        <br>
                        <br>

                        <label> Password: &nbsp;&nbsp;</label>
                        
                        <input type="password" placeholder="shhh! keep it secret" name="lpassword">
                        <br>
                        <br>
                        <input type="submit" name="submit" value="Login here">
                        
                    </form>
                    
                    <div class='signup1'>if you have not registered before, <a href="signup.php"><u> register here </u></a></div>

                    <br>
                    <br>
                </div>


            </div>

        </body>
</html>