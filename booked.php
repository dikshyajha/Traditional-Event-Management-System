<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booked detail for customer</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="booked">
    <div class="navbar">
       <a href="signedin.php"> <img src="photo/logo.png" class="logo" /></a>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="gallery.php"> Gallery</a></li>
          <li><a href="apply.php">Service</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a style="color:black ; font-size:x-large" href="user.php"><img src="photo/uimage.png" height=20px><?php
          echo($_SESSION['uname']);?></a></li>
        </ul>
      </div>
        <div class="cpbook">
    <p>Here, is a booked details.<p></div>
        <div class="cbooktb">
    <table border="1">
    <th>C_id</th>
    <th>Date</th>
    <th>Event</th>
    <th>Venue</th>
    <th>Priest</th>

<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$dbname="traditional";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    echo("Couldnot connect");
}
$sql="SELECT *FROM customer";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);
// echo $result['C_id']." ".$result['name']." ".$result['email']." ".$result['number']." ".$result['address']." ".$result['date']." ".$result['event']." ".$result['venue']." ".$result['priest'];
// echo $total;
if($retval!=0){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
        echo"
        <tr>
        <td>".$result['C_id']."</td>
        <td>".$result['date']."</td>
        <td>".$result['event']."</td>
        <td>".$result['venue']."</td>
        <td>".$result['priest']."</td></tr>";
    }
}
?>
</table>
</div>
</div>
</body>
</html>
