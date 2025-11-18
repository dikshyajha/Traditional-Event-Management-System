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
<div class="abooked">
      <div class="navbar">
       <a href="asignedin.php"> <img src="photo/logo.png" class="logo" /></a>
       <!-- <a href="deletedacc.php" style="padding-left:0px; align:left"> View Deleted Accounts</a> -->

        <ul>
        <!-- <li><a href="asignedin.php">Back</a></li>
          <li><a href="aabout.php">About Us</a></li>
          <li><a href="gallery.php"> Gallery</a></li>
          <li><a href="service.php">Service</a></li>
          <li><a href="contact.php">Contact Us</a></li> -->
          <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/admin.png" height=30px>&nbsp<?php
          echo($_SESSION['adminname']);?> </button>
           <div class="dropdown-content">
            <a href="alogout.php">Logout</a>
            <a href="alluserdb.php"> View All Accounts</a>
            <a href="deletedacc.php"> View Deleted Accounts</a>
            </div>
</div></a></li>
        </ul>
      </div>
      <div class="abooktbu">
        <h1>USER DETAILS</h1>
    <table border="3">
    <th>Name</th>
    <th>username</th>
    <th>Email</th>
    <th>Number</th>
    <th>Gender</th>
    <th>Delete</th>

<?php
require_once "db.php";
$sql="SELECT * FROM register";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);

if($result != 0 ){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
        if($result['status']==1){
        echo"
        <tr>
        <td>".$result['name']."</td>
        <td>".$result['user']."</td>
        <td>".$result['email']."</td>
        <td>".$result['number']."</td>
        <td>".$result['gender']."</td>
        <td> 
            <form action='deleteuser.php' class='deleteuser' method='post'>
                <button id='go1' type='submit' name='deleteuser' value='".$result['R_id']."'>Delete account</button>
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
