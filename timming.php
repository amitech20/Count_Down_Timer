<?php
session_start();


?>


<div id="response"></div>

<script type="text/javascript">
  setInterval(hello, 1000);
  

  function hello()
        {
            var xmlhttp = new XMLHttpRequest();
            
            xmlhttp.open("GET","timer_page.php", false);

            xmlhttp.send(null);

            document.getElementById("response").innerHTML=xmlhttp.responseText;

        }


</script>