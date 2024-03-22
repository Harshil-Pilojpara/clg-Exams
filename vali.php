<?php
if(isset($_POST['submit'])){
    $password = $_POST['pw'];
    $tel = $_POST['phone'];
    $mail = $_POST['em'];
}
echo $_POST['pw']."<br>";
echo $_POST['phone'];echo "<br>";
echo $_POST['em'];
?>