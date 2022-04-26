<?php


session_start();

    if (isset($_SESSION['name'])) {

    include('action.php');



    }
        // echo session_id();
    else {
        
            header("location: login.php");
    }
    
?>



<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="design.css">
        <!-- <meta charset = "UTF-8" /> -->
        <title> Todo list page </title>

    <style>

.comment input{

        background-color: transparent;
        border: none;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 20px;
        width: 347px;
        outline:none;
        height: 15px;
        resize: none;

}

 .red
{

    color: brown;
}
    </style>

    </head>

    <body>

        <div class="container3">
            <div class="todo_list">
                    <div class='red'><?php todo(); ?></div>
                <form method="POST" action="">
                    <div class="l1">
                        <div><h1><?php 
                        $meme = $_SESSION['name'];
                        $mmeme = strtoupper($meme);
                        echo $mmeme."'S"; ?> TO-DO LIST/EVENT: </h1> </div>
                        <div class="front_arrow"> <<<<<<<<<< </div>
                         <div class="back_arrow"> >>>>>>>>>> </div>
                    </div>
                        <div class="comment"><input name="comment" placeholder="what's you task"></div>
                        
                        <hr>
                        <input type="date" name="datea" >
                        <br><br><br>
                        <input type="submit" name="submit" value="ADD">
                </form>
            </div>
        </div>
    </body>
</html>