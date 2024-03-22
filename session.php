<?php
session_start();

?>

<html>
    <body>
        <?php
        $_SESSION['favcolor'] = "green";
        print_r($_SESSION);
        
echo "<br>";
        echo getcwd();

        $myfile = fopen("vali.php","r") or die("unable to open");

        ?>
    </body>
</html>