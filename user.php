<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="linkstyle.css" />
</head>
<!-- <frameset rows="25% ,*" border="0">
    <frame name="nav" src="nav.php" scrolling="no"></frame>
    <frameset cols="20% ,70%" border="2">
            <frame name="listp" src="listp.php"></frame>
            <frame name="display" src="profiled.php"></frame>
</frameset>
</frameset> -->

<body>
<div class="thank">
      <div class="navbar">
       <a href="signedin.php"> <img src="photo/logo.png" class="logo" /></a>
       <ul>
       <li><a href="about.php">About Us</a></li>
            <li><a href="gallery.php"> Gallery</a></li>
            <li><a href="venue.php"> Venue</a></li>
            <li><a href="priest.php"> Priest</a></li>
            <li><a href="service.php">Service</a></li>
            <li><a href="contact.php">Contact Us</a></li>
       <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/uimage.png" height=20px><?php
          echo($_SESSION['uname']);?> </button>
           <div class="dropdown-content">
            <a href="logout.php">Logout</a>
            <a href="user.php">My profile</a>
            </div>
</div></a></li>
        </ul>
      </div>
<!-- <div class="user"> -->
    <!-- <p>My Profile:<br>
       session_start();
       echo "Name:".$_SESSION['username']."<br>";
       echo "Username:".$_SESSION['uname']."<br>";
       echo "Email:".$_SESSION['useremail']."<br>" ;
       echo "Number:".$_SESSION['usernumber']."<br>";
       echo "Password:".$_SESSION['userpassword']."<br>";
    </p></div> -->
    <div class="pd">
        <h1>MY EVENTS</h1>
<table border="3">
    <th>C_id</th>
    <th>B_user</th>
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
$sql="SELECT *FROM customer";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);
// echo $result['C_id']." ".$result['name']." ".$result['email']." ".$result['number']." ".$result['address']." ".$result['date']." ".$result['event']." ".$result['venue']." ".$result['priest'];
// echo $total;

if($retval){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
        if(($_SESSION['uname']==$result['username'])){
           
        echo"
        <tr>
        <td>".$result['C_id']."</td>
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
        <td>";if ($result['status']==0){
            echo'Completed';
        }
        else{
            echo'Active';
        }echo"
        </td>
        </tr>";
        }
        
    }
}
?>
</div>
</div>

</body>
</html>