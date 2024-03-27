<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['address']))
{
    echo "username : ".$_COOKIE['username']."<br>";
    echo "address : ".$_COOKIE['address'];

}
else
{
    echo 'Go to submit page';
}
// $cat = $_COOKIE['username'];
// echo "username : ".$cat."<br>";
// $catt = $_COOKIE['address'];
// echo "address : ".$catt;
//OUTPUT ON SERVER :   here is the list of books
?>


<body>
    <br><a href="cookie.php" ><button>login</button></a>
</body>