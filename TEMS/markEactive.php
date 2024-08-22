<?php 
    session_start();
    $server="localhost";
    $username="root";
    $password="";
    $dbname="traditional";
    $con=mysqli_connect($server,$username,$password,$dbname);
    $cus_id=$_POST['markEactive'];
    $query="UPDATE customer
        set status=1
        where (C_id=$cus_id)";
    mysqli_query($con,$query);
    header("Location: completedevents.php");
    die;
?>