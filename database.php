<?php

$connect = mysqli_connect('localhost','root','');

if (!$connect) {
    
    die(" not connected".mysqli_error($connect)) ;

}

$a = "CREATE DATABASE IF NOT EXISTS mydb";

if (!mysqli(_query($connect,$a))) {
    
        die('created the database'.mysqli_error($connect));
}







?>