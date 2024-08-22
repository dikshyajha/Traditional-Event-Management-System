<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="adminstyle.css" />
    <link rel="stylesheet" href="linkstyle.css" />
</head>
<body>
<div class="front abooked">
      <div class="navbar">
       <a href="asignedin.php"> <img src="photo/logo.png" class="logo" /></a>
        <ul>
        <!-- <li><a href="asignedin.php">Back</a></li> -->
          <!-- <li><a href="aabout.php">About Us</a></li> -->
          <!-- <li><a href="gallery.php"> Gallery</a></li>
          <li><a href="service.php">Service</a></li> -->
          <!-- <li><a href="contact.php">Contact Us</a></li> -->
          <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/admin.png" height=30px>&nbsp<?php
          echo($_SESSION['adminname']);?> </button>
           <div class="dropdown-content">
            <a href="alogout.php">Logout</a>
            <a href="completedevents.php">Completed events</a>
            <a href="allevents.php">All events</a>
            </div>
</div></a></li>
        </ul>
      </div>
      <div class="abooktb">
        <h1>ACTIVE BOOKED DETAILS</h1>
    <table border="3">
    <th>C_id</th>
    <th>Pt_id</th>
    <th>U_name</th>
    <th>Name</th>
    <th>Email</th>
    <th>Number</th>
    <th>Address</th>
    <th>Date</th>
    <th>Event</th>
    <th>Venue</th>
    <th>Priest</th>
    <th>Cost</th>
    <th>Status</th>

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
echo $result['C_id']." ".$result['name']." ".$result['email']." ".$result['number']." ".$result['address']." ".$result['date']." ".$result['event']." ".$result['venue']." ".$result['priest'];
// echo $total;
if($retval!=0){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
        if($result['status']==1){
        echo"
        <tr>
        <td>".$result['C_id']."</td>
        <td>".$result['pt_id']."</td>
        <td>".$result['username']."</td>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['number']."</td>
        <td>".$result['address']."</td>
        <td>".$result['date']."</td>
        <td>".$result['event']."</td>
        <td>".$result['venue']."</td>
        <td>".$result['priest']."</td>
        <td>".$result['price']."</td>
        <td> 
            <form action='markEcomplete.php' class='markEcomplete' method='post'>
                <button type='submit' name='markEcomplete' value='".$result['C_id']."'>Mark Complete</button>
            </form>
        </td>
        </tr>";}
    }
}
?>
</table>
</div>
</div>
</body>
</html>
