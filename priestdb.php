<?php
session_start();
// registration form validation here
// $con=mysqli_connect("localhost","root","");
$server="localhost";
$username="root";
$password="";
$dbname="traditional";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    echo("Couldnot connect");
}

$sqlitable="CREATE TABLE  if not exists venue
(V_id int AUTO_INCREMENT,V_name varchar(40),V_address varchar(30),V_number varchar(10) ,Seat int,D_Price int,P_price int,PRIMARY KEY(V_id))";
    $table=mysqli_query($con,$sqlitable);
    if (!$table)
        die("No table created");
    // else
        // echo("Table foundd");
mysqli_close($con);
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
    <div class="abooked">
    <div class="navbar">
       <a href="asignedin.php"> <img src="photo/logo.png" class="logo" /></a>
        <ul>
          <!-- <li><a href="asignedin.php">Back</a></li> -->
          <!-- <li><a href="gallery.php"> Gallery</a></li>
          <li><a href="service.php">Service</a></li> -->
          <!-- <li><a href="contact.php">Contact Us</a></li> -->
          <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/admin.png" height=30px>&nbsp<?php
          echo($_SESSION['adminname']);?> </button>
           <div class="dropdown-content">
            <a href="alogout.php">Logout</a>
            </div>
</div></a></li>
        </ul>
      </div>
      <div class="abooktb">
      <h1>PRIEST DETAILS</h1>
    <table border="3">
    <th>P_id</th>
    <th>P_name</th>
    <th>P_age</th>
    <th>P_address</th>
    <th>P_number</th>
     <th>P_quali</th>
    <th>P_exp</th>
    <th>P_price</th>

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
$sql="SELECT *FROM priest";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);
// echo $result['name']." ".$result['user']." ".$result['email']." ".$result['number']." ".$result['password'];
// echo $total;
if($retval!=0){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
        echo"
        <tr>
        <td>".$result['P_id']."</td>
        <td>".$result['P_name']."</td>
        <td>".$result['P_age']."</td>
        <td>".$result['P_address']."</td>
        <td>".$result['P_number']."</td>
        <td>".$result['P_quali']."</td>
        <td>".$result['P_exp']."</td>
        <td>".$result['P_price']."</td>
        </tr>";
    }
}?>
</table>
</div>
</div>
</body>
</html>

// header("location:venuedb.php")?>