<?php

session_start();




if (isset($_SESSION['name'])) {

    
include "titlebar.php";  
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

else {
    
        header('location: login.php');
}



?>

<!DOCTYPE html>
<html>
    <head>
    <title>
            Timer page
    </title>

    <?php if(isset($_POST['logout'])) { ?>
                        <script>

document.getElementById("yes").addEventListener("click", displayDate);

function displayDate() {

    var amy = confirm("Are you sure?");

    
    if (amy) {
        <?php
        

 session_unset();
session_destroy();

 header("location: login.php");
 ?>
}


}

</script>

<?php } ?>
    
    <link rel="stylesheet" href="design.css">

    
    
    </head>

    <body>
        

    <div>
        <h1 class="title"><?= strtoupper($task); ?></h1>
    </div>
    
    <div class="container1">
        <?php  if ($days < 0) {
    
    echo "The Date has come and gone";
            }

            else {
               
            

        echo "<div class='days'> <h1> $days </h1><p>days</p></div>
        <div class='hours'><h1> $hours </h1><p> hours</p> </div>
        <div class='minutes'> <h1> $min </h1><p> minutes</p></div>
        <div class='seconds'><h1>$sec </h1><p> seconds</p></div>";
    }?>
    </div>
    </body>
</html>