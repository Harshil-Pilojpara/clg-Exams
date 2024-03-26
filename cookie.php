<?php
// $cookie_name = "user";
// $cookie_value = "abcd";
echo "welcome to demo of cookie<br>";
setcookie("category" , "books" , time() + 100, "/");
echo "cookie is set<br>";

?>


<!-- <html>
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
</html> -->
