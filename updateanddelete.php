
<?php

include "mytable.php";
session_start();

    if (isset($_SESSION['name'])) 
{
        include "titlebar.php"; 
        $id = $_GET['id'];

        $list = mysqli_query($connect,"SELECT * FROM todo_list WHERE s_no = $id");
        $a = mysqli_fetch_assoc($list);


        if(isset($_POST['update']))
        {
            $id = $_GET['id'];
            $task = $_POST['task1'];
            $mymydate = $_POST['mydate'];
            $mytask = str_replace("'","\'",$task);

          if (empty($_POST['task1'])) {
               echo "You cannot have an empty activity";
          }  
          elseif (empty($_POST['mydate'])) {
              
                echo "The date for the event cannot be empty";
          }
          else {

            $a = "UPDATE todo_list SET comment = '$mytask', user_date = '$mymydate' WHERE s_no=$id ";
            $update = mysqli_query($connect,$a);

            if ($update) {
                
                echo "<script> alert('update was successful');
                 window.location = 'timming.php'
                                 </script>";
            }
            else {
                
                die('can not insert'.mysqli_error($connect));
            }

        }

        }


        if(isset($_POST['delete']))
        {
          

            $task = $_POST['task1'];
            $mymydate = $_POST['mydate'];


                $id = $_GET['id'];

            $a = "DELETE FROM todo_list WHERE s_no = $id";
            $update = mysqli_query($connect,$a);

            if ($update) {
                
                echo "<script> window.location = 'view.php' </script>";
            }
           
        
        }
}
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
                    <form method="POST" action="">
                    <div class="l1">
                        <div><h1><?php 
                        $meme = $_SESSION['name'];
                        $mmeme = strtoupper($meme);
                        echo $mmeme."'S"; ?> TO-DO LIST/EVENT: </h1> </div>
                        <div class="front_arrow"> <<<<<<<<<< </div>
                         <div class="back_arrow"> >>>>>>>>>> </div>
                    </div>
                        <div class="comment"><input type='text' name='task1' value='<?php echo $a['comment']; ?>'></div>
                        
                        <hr>
                        <input type="date" name='mydate' value='<?= $a['user_date']; ?>'>
                        <br><br><br>
                        <input type="submit" name="update" value="UPDATE" >
                        <input type="submit" name="delete" value="DELETE" >
                        
                </form>
            </div>
        </div>
    </body>
</html>