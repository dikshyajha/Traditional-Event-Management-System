<?php 
    session_start();
    $server="localhost";
    $username="root";
    $password="";
    $dbname="traditional";
    $con=mysqli_connect($server,$username,$password,$dbname);
    $cus_id=$_POST['markEcomplete'];
    $query="UPDATE customer
        set status=0
        where (C_id=$cus_id)";
    mysqli_query($con,$query);
    header("Location: bookeddb.php");
    die;
?>