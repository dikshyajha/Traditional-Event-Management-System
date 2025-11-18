<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Venue</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="stylevp.css" />
    <link rel="stylesheet" href="linkstyle.css">
  </head>
  <body class="pbody">
  <div class="navbar">
      <a href="signedin.php"> <img src="photo/logo.png" class="logo" /></a>
      <ul>
      <li><a href="about.php">About Us</a></li>
      <li><a  href="gallery.php"> Gallery</a></li>
      <li ><a href="venue.php"> Venue</a></li>
      <li ><a  href="priest.php"> Priest</a></li>
      <li ><a  href="service.php">Service</a></li>
      <li ><a  href="contact.php">Contact Us</a></li>
      <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/uimage.png" height=25px>
                <?php
                echo($_SESSION['uname']);?>
                </button>
          <div class="dropdown-content">
          <a href="logout.php">Logout</a>
          <a href="user.php">My profile</a>
          </div>
          </div>
          </a></li>
        </ul>
      </div>
    <div class="cards_v">
      <div class="card_v">
        <img src="photo\venue-1.jpg" alt="" class="card__image" />
        <div class="card__title">OM Party Palace</div>
        <div class="card__content">
          Address: Dhapasi, Tokha-06
          <br />
          Phone Number: 9812312312
          <br />
          Email:om@gmail.com
          <br/>
          Seat Capacity: 1000 people
          <br />
          Space Preference: Indoor
          <br />
          Price: Starts from Rs.1,000(Rs.700-1000 per plate)
        </div>
      </div>
      <div class="card_v">
        <img src="photo\venue-2.jpg" alt="" class="card__image" />
        <div class="card__title">Green Garden Palace</div>
        <div class="card__content">
          Address: Koteshwor
          <br />
          Phone Number: 9814564561
          <br />
          Email:greegp@gmail.com
          <br />
          Seat Capacity: 800 people
          <br />
          Space Preference: Indoor and Outdoor
          <br />
          Price: Starts from Rs.850(Rs.800 per plate)
        </div>
      </div>
      <div class="card_v">
        <img src="photo\venue-3.jpg" alt="" class="card__image" />
        <div class="card__title">Everyday Banquet</div>
        <div class="card__content">
          Address: Budhanilkantha
          <br />
          Phone Number: 9819988998
          <br />
          Email:everyday@gmail.com
          <br />
          Seat Capacity: 600 people
          <br/>
          Space Preference: Indoor
          <br />
          Price: starts from Rs.750(Rs.900 per plate)
        </div>
      </div>
      <div class="card_v">
        <img src="photo\venue-4.jpg" alt="venue 4 pic missing" class="card__image" />
        <div class="card__title">Hamro Banquet</div>
        <div class="card__content">
          Address: Swoyambhu
          <br />
          Phone Number: 9810000111
          <br />
          Email:hamro@gmail.com
          <br/>
          Seat Capacity: 1000 people
          <br />
          Space Preference: Indoor
          <br />
          Price: Starts from Rs.750(Rs.1000 per plate)
        </div>
      </div>
      <div class="card_v">
        <img src="photo\venue-5.jpg" alt="" class="card__image" />
        <div class="card__title">Swastik Party Palace</div>
        <div class="card__content">
          Address: Maitidevi
          <br />
          Phone Number: 9819819819
          <br />
          Email:swastik@gmail.com
          <br/>
          Seat Capacity: 1000 people
          <br />
          Space Preference: Outdoor
          <br />
          Price: Starts from Rs.750(Rs.700-1000 per plate)
        </div>
      </div>
    </div>
  </body>
</html>
