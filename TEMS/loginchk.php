<?php
session_start();
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
// echo("elloo!");

// error_reporting(0);
$server="localhost";
$username="root";
$password="";
$dbname="traditional";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    echo("Couldnot connect");
}
$sql="SELECT *FROM register";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);
// echo $total;
if(($retval)){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
    // echo $result['name']." ".$result['user']." ".$result['email']." ".$result['number']." ".$result['password']."<br>";
        if($name==$result['user']){
            if($pass==$result['password']){
                if($email==$result['email']){
                // echo("Hi!");
                $_SESSION['u_id']=$result['R_id'];
                $_SESSION['username']=$result['name'];
                $_SESSION['useremail']=$result['email'];
                $_SESSION['usernumber']=$result['number'];
                $_SESSION['userpassword']=$result['password'];
                $_SESSION['usergender']=$result['gender'];
                $_SESSION['uname'] = $result['user'];
                header("Location: signedin.php");
                die;
            }
        }
    }
    }
}

header("location:login.php");
die;
?>