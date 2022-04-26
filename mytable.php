
<?php

    $connect = mysqli_connect('localhost', 'root', '','mydb');

    
    $my_login = "CREATE TABLE IF NOT EXISTS login_in 
                    ( s_no int(10) auto_increment primary key,
                        firstname varchar(255) NOT NULL,
                        Username varchar(10) NOT NULL,
                        Password  varchar(10) NOT NULL,
                        confirm_p int(10) NOT NULL)";
    


    $my_todo = "CREATE TABLE IF NOT EXISTS todo_list (
                s_no int(10) auto_increment primary key,
                comment varchar(255) NOT NULL,
                user_date DATE )";


            if (!(mysqli_query($connect, $my_login))) {
                
                if (!(mysqli_query($connect, $my_todo))) {
                    
                    die("couldn't connect".mysqli_error($connect));
                }
            }



?>