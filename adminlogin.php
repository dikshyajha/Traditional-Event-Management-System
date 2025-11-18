<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding</title>
    <link rel="stylesheet" href="adminstyle.css">
</head>
<body>
<div class="adminpage">
    <div class="navbar">
        <a href="index.php"> <img src="photo/logo.png" class="logo" /></a>
        <!-- <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul> -->
    </div>
    <div class="adminform">
        <div class="formtitle">Admin Log In Page</div>
        <form name="myform" method="post" action="aloginchk.php">
        <div class="admin-details">
                <div class="input-box">
                    <span class="details">Admin Username</span>
                    <input type="text" name="aname" placeholder="Enter your username">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="apassword" placeholder="">
                </div></div>
                <div class="button">
                    <input type="submit" name="submit" value="Log In">
                </div>
            </form>
    </div>
    </div>
</div>
</body>
</html>