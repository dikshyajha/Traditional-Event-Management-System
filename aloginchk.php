<?php
session_start();
$name=$_POST["aname"];
$pass=$_POST["apassword"];
echo("elloo!");
if($name=="rds"){
    if($pass=="rds"){
        {
        echo("Hi!");
        $_SESSION['adminname'] = $name;
        header("Location: asignedin.php");
        die;
    }}}
header("location:index.php");
?>