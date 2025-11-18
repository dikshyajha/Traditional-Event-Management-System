<?php
session_start();
unset($_SESSION['adminname']);
// echo"done";
header("location:index.php");
die;
?>