<?php
$cookie_name = "user";
$cookie_value = "abcd";

setcookie($cookie_name,$cookie_value,time()+10,"/");

?>


<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie ".$cookie_name." is not set"."<br>";
        }
        else
        {
            echo "cookie ".$cookie_name." is set"."<br>";
            echo "value is ".$cookie_value;
        }
        
        ?>
    </body>
</html>