<?php 
    session_start();
    $server="localhost";
    $username="root";
    $password="";
    $dbname="traditional";
    $con=mysqli_connect($server,$username,$password,$dbname);
    $restoreR_id=$_POST['restoreuser'];
    $query="UPDATE register
        set status=1
        where (R_id=$restoreR_id)";
    mysqli_query($con,$query);
    // echo $deleteR_id;
    header("Location: deletedacc.php");
    die;
?>