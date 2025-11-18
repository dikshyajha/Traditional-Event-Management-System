<?php
session_start();
unset($_SESSION['uname']);
// echo"done";
header("location:index.php");
die;
?>