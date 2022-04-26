<?php

session_start();

    
include ("action.php");



?>



<!DOCTYPE html>
<html>
    <head>
        <title> Sign up page </title>
        <link rel="stylesheet" href="index.css">
        <style>
            .red
            {

            color: brown;
            }

    </style>
    </head>

    <body>
        <div class="container3">
            <div class="signup2">
                <div class='red'><?php signup(); ?></div>
                <h1> SIGNUP </h1>
                    <form method="POST" action="">
                        <label>Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" placeholder="Please state your full name" name="fname">
                        <br>
                        <br>
                        <label>Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" placeholder="What is your username" name="uname">
                        <br><br>
                        <label>Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" placeholder="Shhhh! keep it a secret"  name="password">
                        <br><br>
                        <label>Confirm Password: </label>
                        <input type="password" placeholder="confirm your password" name="cpassword">
                        <div class='signup1'>If you have an account already, <a href="index.php"><u><b> LOGIN </b></u></a></div>
                        <br><br>
                        <input type="submit" name="submit" value="Signup">
                    </form>

            </div>
        </div>
    </body>
</html>