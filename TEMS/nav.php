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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="linkstyle.css" />
</head>
<body>
    <div class="top">
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
</div>
    
</body>
</html>