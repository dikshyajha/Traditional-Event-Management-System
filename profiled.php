<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />

</head>
<body>
<div class="user">
    <p>My Profile:<br>
<?php
       session_start();
       echo "Name:".$_SESSION['username']."<br>";
       echo "Username:".$_SESSION['uname']."<br>";
       echo "Email:".$_SESSION['useremail']."<br>" ;
       echo "Number:".$_SESSION['usernumber']."<br>";
       echo "Password:".$_SESSION['userpassword']."<br>";
       ?></p></div>
</body>
</html>