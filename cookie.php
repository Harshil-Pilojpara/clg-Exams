<?php
// $cookie_name = "user";
// $cookie_value = "abcd";
if(isset($_POST['submit']))
{
    setcookie('username' , $_POST['username'] , time() + 5, "/");
    setcookie('address' , $_POST['address'], time() + 5, "/");
    header('Location:cookie_preview.php');
}
?>
<html>
<body>
    <form action="" method="post">
    Name:<input type="text" name="username"><br>
    Address:<input type="text" name="address"><br>
    <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>


<!-- <html>
    <body>
        // <?php
        // if(!isset($_COOKIE[$cookie_name])){
        //     echo "cookie ".$cookie_name." is not set"."<br>";
        // }
        // else
        // {
        //     echo "cookie ".$cookie_name." is set"."<br>";
        //     echo "value is ".$cookie_value;
        // }
        
        // ?>
    </body>
</html> -->
