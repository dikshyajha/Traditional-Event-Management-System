<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Priest</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="stylevp.css" />
    <link rel="stylesheet" href="linkstyle.css">
  </head>
     
  <body class="vbody" background="photo\aboutBg3.jpg">
  <div class="navbar">
       <a href="signedin.php"> <img src="photo/logo.png" class="logo" /></a>
       <ul>
       <li><a style="color:black; font-weight:600;" href="about.php">About Us</a></li>
            <li><a style="color:black; font-weight:600;" href="gallery.php"> Gallery</a></li>
            <li><a style="color:black; font-weight:600;" href="venue.php"> Venue</a></li>
            <li><a style="color:black; font-weight:600;" href="priest.php"> Priest</a></li>
            <li><a style="color:black; font-weight:600; " href="service.php">Service</a></li>
            <li><a style="color:black; font-weight:600;" href="contact.php">Contact Us</a></li>
       <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/uimage.png" height=20px><?php
          echo($_SESSION['uname']);?> </button>
           <div class="dropdown-content">
            <a style="color:black;" href="logout.php">Logout</a>
            <a style="color:black;" href="user.php">My profile</a>
            </div>
</div></a></li>
        </ul>
      </div>
    <div class="cards_p">
      <div class="card_p">
        <div class="upper">
          <div class="image_p">
            <img src="photo\p-5.jpg" alt="" />
          </div>
        </div>
        <div class="lower">
          <div>
            <h3>Vedik Acharya</h3>
            <h4>Age: 70</h4>
            <h4>Address:Kalanki</h4>
            <h4>Number:9812121212</h4>
            <h4>Qualification: Doctorate Degree</h4>
            <h4>Experience: 43 years</h4>
            <h4>Price: Starts from Rs.50</h4>
          </div>
        </div>
      </div>
      <div class="card_p">
        <div class="upper">
          <div class="image_p">
            <img src="photo\p-1.jpg" alt="" />
          </div>
        </div>
        <div class="lower">
          <div>
            <h3>Mritunjaya Mishra</h3>
            <h4>Age: 60</h4>
            <h4>Address:Balaju</h4>
            <h4>Number:9814564566</h4>
            <h4>Qualification: Acharya Degree</h4>
            <h4>Experience: 35 years</h4>
            <h4>Price: Starts from Rs.45</h4>
          </div>
        </div>
      </div>
      <div class="card_p">
        <div class="upper">
          <div class="image_p">
            <img src="photo\p-4.jpg" alt="" />
          </div>
        </div>
        <div class="lower">
          <div>
            <h3>Tulsi Pandit</h3>
            <h4>Age: 60</h4>
            <h4>Address:Sitapaila</h4>
            <h4>Number:9819988888<h4>
            <h4>Qualification: Shastri</h4>
            <h4>Experience: 35 years</h4>
            <h4>Price: Starts from Rs.40</h4>
          </div>
        </div>
      </div>
      <div class="card_p">
        <div class="upper">
          <div class="image_p">
            <img src="photo\p-2.jpg" alt="" />
          </div>
        </div>
        <div class="lower">
          <div>
            <h3>Shyam Pandey</h3>
            <h4>Age: 35</h4>
            <h4>Address:Bafal</h4>
            <h4>Number:98010000222</h4>
            <h4>Qualification: Bachelors Degree in Sanskrit</h4>
            <h4>Experience: 8 years</h4>
            <h4>Price: Starts from Rs.25</h4>
          </div>
        </div>
      </div>
      <div class="card_p">
        <div class="upper">
          <div class="image_p">
            <img src="photo\p-3.jpg" alt="" />
          </div>
        </div>
        <div class="lower">
          <div>
            <h3>Dev Pandit</h3>
            <h4>Age: 33</h4>
            <h4>Address:Tahachal</h4>
            <h4>Number:9819819810</h4>
            <h4>Qualification: Bachelors Degree in Sanskrit</h4>
            <h4>Experience: 8 years</h4>
            <h4>Price: Starts from Rs.21</h4>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
