<?php

        session_start();
        include "mytable.php";
        

       




?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel='stylesheet' href='design.css'>
        <style>

            body{
                background-color: black;
                text-align: center;
                color: white;

            }
            table {
                
                width:400px; 
                margin-left:480px;
                background-color: black;
                border-color: white;
            }

            #rr{
                text-decoration: none;
                color: white;
            }
            
            

        </style>
    </head>
        <body>
              
       

                <h1>TODO_LIST/EVENTS</h1> <?php  include "titlebar.php"; ?>

                <h8>click on any activity to update or delete your activity</h8>
                
        </body>
</html>


<?php

$amy = mysqli_query($connect,"SELECT * FROM todo_list ORDER BY s_no DESC ");

$result = mysqli_num_rows($amy);

echo "<table border='2px'> 
<tr>
<th width= '40px'>S/N</th>
<th width= '200px'>ACTIVITIES</th>
<th width= '160px'>DATE</th>
</tr>

</table>";

$i = 1;
while ($row = mysqli_fetch_assoc($amy)) {
    $a = $row['s_no'];
    
    
    $s= $i;
        
  
        echo "<table border= '2px' width='400px'>
        <tr>";
        echo "<td width= '40px'> <a id='rr' href='updateanddelete.php?id=$a'>".$s.'</a></td>';
        echo "<td width= '200px'><a id='rr' href='updateanddelete.php?id=$a'>".$row['comment']."</a></td>";
        echo "<td width= '160px'><a id='rr' href='updateanddelete.php?id=$a'>".$row['user_date'].'</a></td>';
        echo "</table> </tr>";

        $i++;

}
?>