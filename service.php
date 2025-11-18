<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="linkstyle.css">
</head>
<body class="service-body">
    <div class="service">
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
    </div>
    <div class="event">
      <h1>Our Services</h1>
      <div class="content-box">
        <div class="card">
          <h2>Wedding</h2>
          <p>A wedding is a ceremony where two people are united in marriage. Wedding traditions and customs vary greatly between cultures, ethnic groups, religions, countries, and social classes. 
          </p>
          <button><a href="apply.php">Apply</a></button>

        </div>
        <div class="card">
          <h2>Bratabanda</h2>
          <p>
            A step towards the manhood. Bratabandha, a ritual that a boy must go through before his marriage. The rituals in Bratabandha vary from community to community. 
          </p>
          <button><a href="apply2.php">Apply</a></button>
        </div>
        <div class="card">
          <h2>Pasni</h2>
          <p>Pasni is a ceremony of feeding rice to an infant that we practice as Annaprashan on an auspicious day. To feed an infant, we have to look for an auspicious day that has been stated by the guru or Jyotish. 
          </p>
          <button><a href="apply3.php">Apply</a></button>
        </div>
        <!-- <div class="card">
          <h2>Wedding</h2>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil illum incidunt officia enim at eaque illo voluptatem dolores quia nemo? Dicta quod aspernatur eum repellat. Consectetur aliquam, delectus minima cum ipsum eveniet quasi sunt nihil?
          </p>
        </div> -->
       
      </div>
    </div>
</body>
</html>