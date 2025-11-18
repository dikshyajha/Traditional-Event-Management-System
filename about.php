<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="linkstyle.css">
  </head>
  <body class="about">
    <div>
      <div class="navbar">
       <a href="signedin.php"> <img src="photo/logo.png" class="logo" /></a>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="gallery.php"> Gallery</a></li>
          <li><a href="venue.php"> Venue</a></li>
            <li><a href="priest.php"> Priest</a></li>
          <li><a href="service.php">Service</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/uimage.png" height=25px>
                <?php
                echo($_SESSION['uname']);?>
                </button>
           <div class="dropdown-content">
            <a href="logout.php">Logout</a>
            <a href="user.php">My profile</a>
            </div>
</div></a></li>
        </ul>
      </div>
      <div class="content">
        <h1>RDS Traditional Event Management</h1>
        <p>
          RDS  Traditional Event Management is one of the growing and innovating Event Management
          Platform with its uniqueness of managing only traditional events of
          Nepal. We have creative and experienced team of experts who can boost
          your event with state-of-the-art concepts and plans, as per you need.
          Our full-service event planning and design team will guide you every
          step of the way, ensuring a stress-free experience from start to
          finish. You can entrust us with all your needs and we will deliver.
          That is what we are here for, to make sure you host the best events
          and functions according to your needs."Turning your dreams into
          reality"
        </p>
      </div>
    </div>
  </body>
</html>
