<?php
session_start();
require_once "db.php";
if(!$con)
{
    echo("Couldnot connect");
}
// $sqlitable="CREATE TABLE  if not exists register
//         (R_id int NOT NULL AUTO_INCREMENT,name varchar(15),user varchar(12), email varchar(30),number varchar(10) ,password varchar(15),gender varchar(10),PRIMARY KEY(R_id))";
//     $table=mysqli_query($con,$sqlitable);
//     if (!$table)
//         die("No table created");
//     else
//         echo("Table foundd");
        $username=$_POST['user'];
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$password=$_POST['password'];
$gender=$_POST['gender'];
// $name=$_POST["name"];
// $email=$_POST["email"];
// $pass=$_POST["password"];
$sql="INSERT INTO register(name,user,email,number,password,gender) VALUES ('$name','$username','$email','$number','$password','$gender')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo("data submitted");
}
else{
    echo("data failed");
}
mysqli_close($con);

header("location:login.php");
?>