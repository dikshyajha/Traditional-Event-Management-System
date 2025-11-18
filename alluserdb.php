<?php
    session_start();
    if (!isset($_SESSION['adminname'])) {
        header("Location: alogin.php");
        exit;
    }
    require_once "db.php";
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
          <!-- <li><a href="aabout.php">About Us</a></li> -->
          <!-- <li><a href="gallery.php"> Gallery</a></li>
          <li><a href="service.php">Service</a></li> -->
          <!-- <li><a href="contact.php">Contact Us</a></li> -->
          <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/admin.png" height=30px>&nbsp<?php
          echo($_SESSION['adminname']);?> </button>
           <div class="dropdown-content">
            <a href="alogout.php">Logout</a>
            <a href="alluserdb.php"> View All Accounts</a>
            <a href="deletedacc.php"> View DELETED Accounts</a>
            </div>
</div></a></li>
        </ul>
      </div>
      <div class="abooktbu">
        <h1>ALL USER DETAILS</h1>
    <table border="3">
    <th>Name</th>
    <th>username</th>
    <th>Email</th>
    <th>Number</th>
    <!-- <th>Password</th> -->
    <th>Gender</th>
    <th>Restore</th>

<?php
// error_reporting(0);
// $server="localhost";
// $username="root";
// $password="";
// $dbname="traditional";
// $con=mysqli_connect($server,$username,$password,$dbname);
// if(!$con)
// {
//     echo("Couldnot connect");
// }
$sql="SELECT *FROM register";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);
// echo $result['name']." ".$result['user']." ".$result['email']." ".$result['number']." ".$result['password'];
// echo $total;
if($result != 0){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
        echo"
        <tr>
        <td>".$result['name']."</td>
        <td>".$result['user']."</td>
        <td>".$result['email']."</td>
        <td>".$result['number']."</td>
        <td>".$result['gender']."</td>
        <td>";if ($result['status']==0){
            echo'Deleted';
        }
        else{
            echo'Active';
        }echo"
        </td>
        </tr>";
    }
}
?>
</table>
</div>
</div>
</body>
</html>
