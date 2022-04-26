


<?php

include "mytable.php";


?>
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