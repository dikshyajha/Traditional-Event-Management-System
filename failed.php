
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Failed</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
</head>
<body style="margin: 0;
    padding: 0;background-image:url('photo/green.jpg');
    font-family: sans-serif;">
 <div class="success" style="background-image:url('photo/green.jpg'); 
        background-size: cover;
        height: 100vh;
        font-size:x-large;
        align-items: center; padding-top:50px; padding-left:35%;">
        <img  style="padding-left:150px; margin-top:200px;" src="photo/wrong.png" height="100px">

<?php
echo "<h1>Payment Failed"
?>
<p style="font-size:medium">Your payment was not successfully processed.Please,try again.</p>
<button style="  text-decoration: none;
        margin-left: 200px;
        margin-top: 15px;
        padding: 10px;
        align-item:center;
        border-radius: 5px;
        border:2px solid rgb(245, 244, 243);
        background:transparent;"><a href="thanks.php" style="   text-decoration: none;
        font-weight: bold;
    font-size:large;
    color:black;"
    }>Okay</a></button>
</div>
</body>
</html>
<?php 
// echo "<h1>Payment Failed";
?>
<!-- <a href="signedin.php">Go To Homepage</a> -->