<?php


function signup(){
    
    include ("mytable.php");



    if (isset($_POST['submit'])) {
    

        $firstname = $_POST['fname'];
        $username =  $_POST['uname'];
        $password =  $_POST['password'];
        $verify_p =  $_POST['cpassword'];
    
    
        
        $a = strlen($password);
        
        
    
            if (empty($firstname)){
    
                echo " first name cannot be empty";
            }
            
            elseif (!(preg_match("/^[a-zA-Z]*$/", $firstname))) {
                            echo "firstname takes only alphabets";
            }
                elseif (empty($username)) {
                    echo "Username cannot be empty";
                }
                elseif (!(preg_match("/^[_a-z0-9A-Z-]*$/", $username))) {
                    echo "You can only use numbers and alphabets for your username";
                }
                    elseif (empty($password)) {
                        
                        echo "password cannot be empty";
                    }
                    elseif (!(preg_match("/^[_a-z0-9A-Z-]*$/", $password))) {
                        
                            echo "only numbers and alphabets are can be used for password";
                    }
                    elseif (empty($verify_p)){
    
                        echo " password confirmation cannot be empty";
                    }
                    elseif ($a < 5) {
                        echo "Your password should be more than 4 characters";
                    }
                    
                    elseif ($password != $verify_p) {
                                    
                        echo "your password is not the same with the confirm password";
                    }
    
    
                else {
    
                    $signing = mysqli_query($connect, "INSERT INTO login_in (
                        firstname,Username,Password,confirm_p)
                                VALUES('$firstname','$username','$password','$verify_p')");
                                
    
                                if (!$signing)
                                {                         
                                    die('could not connect'.mysqli_error($connect));
                                }
                                
                                echo "<script> alert('Registration was successful'); 
                                window.location = 'index.php'</script>";
                                
                            
                      
                }
    
                        }
    
    
}




function login(){

include ("mytable.php");

if (isset($_POST['submit'])) {
    
    $lusername = $_POST['lusername'];
    $lpassword = $_POST['lpassword'];


    $verify_login = "SELECT * FROM login_in WHERE Username = '$lusername'";

 
    $result = mysqli_query($connect, $verify_login);


    if (empty($lusername)) {
        
        echo "Username cannot be empty";

    }
    
    elseif (empty($lpassword)) {

        echo "Password cannot be empty ";
    }


    elseif (mysqli_num_rows($result)  == 0 ) {
        echo 'username doesnt exist'; // to check if username exist
    }

    

    else{

            while ($row = mysqli_fetch_assoc($result)) {

                $hash = $row['Password'];
                $firstname = $row['firstname'];

                
            



                if ($lpassword == $hash) {

                    $_SESSION['name'] = $firstname;

                    header('location: todo_list.php');
                    
                    
                }
        
                else {
                    
                    echo 'wrong username and password, inputs are case-sensitive';
                }
                }
        
                
            }


            
        

    
}
}




function todo(){

    include ('mytable.php');

    if (isset($_POST['submit'])) 
    {
        
        $task = $_POST['comment'];
        $mydate = $_POST['datea'];
        $mytask = str_replace("'","\'",$task);

          if (empty($_POST['comment'])) {
               echo "What's your task for today";
          }  
          elseif (empty($_POST['datea'])) {
              
                echo "The date for the event cannot be empty";
          }
          else {
              
         
        $todoo = mysqli_query($connect, "INSERT INTO todo_list (comment, user_date)
                VALUES('$mytask','$mydate')");
        
            if ( $todoo) 
            {
                
                header('location: timming.php');
            }

            else {
                
                die('can not insert'.mysqli_error($connect));
            }
        }
    }
                   
}

        function timer(){


            include "mytable.php";
// static countdown timer using PHP. check this site for dynamic count down timer: https://www.delftstack.com/howto/php/php-countdown-timer/

    $a = "SELECT * FROM todo_list ORDER BY s_no DESC LIMIT 1 ";
    $check = mysqli_query($connect, $a);

    while ($row = mysqli_fetch_assoc($check)) {
        
        $task = $row['comment'];
        $date = $row['user_date'];
    }    
    
    
        $target_day = strtotime($date);
        $time_left = $target_day - time();


        $days = floor($time_left / (60*60*24));
        $time_left %= (60 * 60 * 24);

        $hours = floor($time_left / (60 * 60));
        $time_left %= (60 * 60);

        $min = floor($time_left / 60);
        $time_left %= 60;

        $sec = $time_left;

    }




?>