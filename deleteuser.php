<?php 
    session_start();
    $server="localhost";
    $username="root";
    $password="";
    $dbname="traditional";
    $con=mysqli_connect($server,$username,$password,$dbname);
    $deleteR_id=$_POST['deleteuser'];
    $query="UPDATE register
        set status=0
        where (R_id=$deleteR_id)";
    mysqli_query($con,$query);
    // echo $deleteR_id;
    header("Location: userdb.php");
    die;
?>