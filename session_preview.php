<?php
session_start();
if(isset($_SESSION["name"]) && isset($_SESSION["address"]))
{
    echo 'name '.$_SESSION["name"].'<br>';
    echo 'address '.$_SESSION["address"].'<br>';
}


?>