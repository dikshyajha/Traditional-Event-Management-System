<?php 
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="traditional";
$con=mysqli_connect($server,$username,$password,$dbname);
$u_id=$_SESSION['u_id'];
$username=$_SESSION['uname'];
$name=$_SESSION['custname'];
$email=$_SESSION['custemail'];
$number=$_SESSION['custnumber'];
$address=$_SESSION['custaddress'];
$date=$_SESSION['custdate'];
$event=$_SESSION['custevent'];
$venue=$_SESSION['custvenue'];
$priest=$_SESSION['custpriest'];
$total=$_SESSION['total'];
$pt_id=$_SESSION['pt_id'];
$sql="INSERT INTO customer(u_id,username,name,email,number,address,date,event,venue,priest,price,pt_id) 
    VALUES 
('$u_id','$username','$name','$email','$number','$address','$date','$event','$venue','$priest','$total','$pt_id')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo("data failed");
}
else{
    // echo("data submitted");
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
</head>
<body style="margin: 0;
    padding: 0;background-image:url('photo/green.jpg');
    font-family: sans-serif;">
 <div class="success" style="background-image:url('photo/green.jpg');
        background-size: cover;
        height: 100vh;
        font-size:x-large;
        align-items: center; padding-top:50px; padding-left:35%;">
        <img  style="padding-left:200px; margin-top:200px;" src="photo/tickgreen.png" height="100px">

<?php
echo "<h1>Payment Successful"
?>
<p style="font-size:medium">Thank you!Your payment is complete.</p>
<button style="  text-decoration: none;
        margin-left: 200px;
        margin-top: 15px;
        padding: 10px;
        align-item:center;
        border-radius: 5px;
        border:2px solid rgb(245, 244, 243);
        background:transparent;"><a href="signedin.php" style="   text-decoration: none;
        font-weight: bold;
    font-size:large;
    color:black;"
    }>Done</a></button>
</div>
</body>
</html>