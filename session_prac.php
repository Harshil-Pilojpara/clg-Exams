<?php
//Q1. Write a PHP script to create session and store
// username and address in it and print it in next
//page.
session_start();
if(isset($_POST['submit']))
{
    $_SESSION["name"] = $_POST['name'];
    $_SESSION["address"] = $_POST['address'];
    
    header('Location:session_preview.php');
}
?>
<html>
<body>
    <form action="" method="post">
        Name <input type="text" name="name"><br>
        Address<input type="text" name="address"><br>
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>

// $str = 'The quick brown fox jumps over the lazy dog.';
// $find = preg_match('/jumps/i',$str);
// echo $find;
// // $str = '264912';
// // $arr = str_split($str,2);
// // $newstr = implode(':',$arr);
// // echo $newstr;