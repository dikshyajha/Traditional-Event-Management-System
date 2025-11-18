<?php
session_start();
require_once "db.php";
$sql = 'CREATE Database if not exists traditional';
   $retval = mysqli_query($con,$sql );
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Traditional Event Management System</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="front">
      <div class="navbar">
       <a href="index.php"> <img src="photo/logo.png" class="logo" /></a>
        <ul>
          <!-- <li><a href="about.php">About Us</a></li> -->
          <!-- <li><a href="gallery.php"> Gallery</a></li>
          <li><a href="service.php">Service</a></li> -->
          <!-- <li><a href="contact.php">Contact Us</a></li> -->
          <li><a href="adminlogin.php"><img src="photo/admin.png" height=20px style="align-item:center">Admin</a></li>
        </ul>
      </div>
      <div class="heading">
        <h1> RDS TRADITIONAL EVENT MANAGEMENT</h1>
        <p>plan your event as per your wish</p>
        <button><a href="form.php">Register/Sign In</a></button>
      </div>
    </div>
   </body>
</html>
