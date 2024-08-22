<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Home Page</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="linkstyle.css" />
  </head>
  <body>
    <div class="front">
      <div class="navbar">
       <a href="asignedin.php"> <img src="photo/logo.png" class="logo" /></a>
        <ul>
          <!-- <li><a href="aabout.php">About Us</a></li> -->
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
      <div class="heading">
      <button><a href="userdb.php">User Details</a></button>&nbsp&nbsp&nbsp&nbsp
      <button><a href="venuedb.php">Venue Details</a></button>&nbsp&nbsp&nbsp&nbsp&nbsp
      <button><a href="priestdb.php">Priest Details</a></button>&nbsp&nbsp&nbsp&nbsp
        <button><a href="bookeddb.php">Booking Details</a></button>
      </div>
    </div>
   </body>
</html>