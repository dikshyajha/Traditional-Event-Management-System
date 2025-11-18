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
     
  <body class="vbody">
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
            <h5>Age: 70</h5>
            <h5>Address:Kalanki</h5>
            <h5>Number:9812121212</h5>
            <h5>Qualification: Doctorate Degree</h5>
            <h5>Experience: 43 years</h5>
            <h5>Price: Starts from Rs.50</h5>
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
            <h5>Age: 60</h5>
            <h5>Address:Balaju</h5>
            <h5>Number:9814564566</h5>
            <h5>Qualification: Acharya Degree</h5>
            <h5>Experience: 35 years</h5>
            <h5>Price: Starts from Rs.45</h5>
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
            <h5>Age: 60</h5>
            <h5>Address:Sitapaila</h5>
            <h5>Number:9819988888<h5>
            <h5>Qualification: Shastri</h5>
            <h5>Experience: 35 years</h5>
            <h5>Price: Starts from Rs.40</h5>
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
            <h5>Age: 35</h5>
            <h5>Address:Bafal</h5>
            <h5>Number:98010000222</h5>
            <h5>Qualification: Bachelors Degree in Sanskrit</h5>
            <h5>Experience: 8 years</h5>
            <h5>Price: Starts from Rs.25</h5>
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
            <h5>Age: 33</h5>
            <h5>Address:Tahachal</h5>
            <h5>Number:9819819810</h5>
            <h5>Qualification: Bachelors Degree in Sanskrit</h5>
            <h5>Experience: 8 years</h5>
            <h5>Price: Starts from Rs.21</h5>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
