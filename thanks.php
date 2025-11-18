<?php
session_start();
include 'payment.php';
include 'setting.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="linkstyle.css">
</head>
<body>
    <div class="thank">
      <div class="navbar">
       <a href="signedin.php"> <img src="photo/logo.png" class="logo" /></a>
       <ul>
       <li class="last"><div class="dropdown"> <button class="dropbtn"><img src="photo/uimage.png" height=20px><?php
          echo($_SESSION['uname']);?> </button>
           <div class="dropdown-content">
            <a href="logout.php">Logout</a>
            <a href="user.php">My profile</a>
            </div>
</div></a></li>
        </ul>
</div>
    <h1>BOOKING SUCCESSFUL....</h1>
    <div class="square">
        <h3>Your Booking details</h3><br>
       <div class="tphp"><?php
       echo"Username:".$_SESSION['uname']."<br>";
       echo "Name:".$_SESSION['custname']."<br>";
       echo "Email:".$_SESSION['custemail']."<br>";
       echo "Address:". $_SESSION['custaddress']."<br>";
       echo "Number:".$_SESSION['custnumber']."<br>";
       echo "Date:".$_SESSION['custdate']."<br>";
       echo "Event:".$_SESSION['custevent']."<br>";
       echo "Venue:".$_SESSION['custvenue']."<br>";
       echo "Priest:".$_SESSION['custpriest']."<br>";
       echo "Total price:".$_SESSION['total'];
       ?><br>
       <table border="0" style="padding-right:10px;">
        <tr><td>
         <form action="<?php echo $epay_url?>" name="esewa-pay" method="POST">
            <input value="<?php echo $_SESSION['total']?>" name="tAmt" type="hidden">
            <input value="<?php echo $_SESSION['total']?>" name="amt" type="hidden">
            <input value="0.00" name="txAmt" type="hidden">
            <input value="0" name="psc" type="hidden">
            <input value="0" name="pdc" type="hidden">
            <input value="<?php echo $merchant_code?>" name="scd" type="hidden">
            <input value="<?php echo $pid?>" name="pid" type="hidden">
            <!-- https://localhost:5000/myapp/ i -->
            <input value="<?php echo $success_url?>" type="hidden" name="su">
            <input value="<?php echo $failed_url?>" type="hidden" name="fu">
            <!-- <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su"> -->
            <!-- <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu"> -->
            <input value="Pay(esewa)" type="submit" id="go">
            <!-- <img src="photo/esewa.png" height="60px" style="top: 10px; margin-left:10px;">
            <img src="photo/fone pay.png" height="60px" style="top:10px; margin-left:10px; "> -->
        </form></td><td>
        <form method="GET" name="fone-pay" action="<?php echo $paymentDevUrl;?>">
            <input type="hidden" name="PID" value="<?php echo $PID;?>" >
            <input type="hidden" name="MD"   value="<?php echo $MD;?>">
            <input type="hidden" name="AMT" value="<?php echo $AMT;?>">
            <input type="hidden" name="CRN" value="<?php echo $CRN;?>">
            <input type="hidden" name="DT" value="<?php echo $DT;?>">
            <input type="hidden" name="R1" value="<?php echo $R1;?>">
            <input type="hidden" name="R2" value="<?php echo $R2;?>">
            <input type="hidden" name="DV" value="<?php echo $DV;?>">
            <input type="hidden" name="RU" value="<?php echo $RU;?>">
            <input type="hidden" name="PRN" value="<?php echo $PRN;?>">
            <input type="submit" value="Pay(fonepay)" id="go">
        </form></td></tr>
        <tr><td><button><a href="signedin.php">Cancel</a></button></td>
    </tr></table>


        </div> 
      </div>
      <!-- <div class="clickpay">    -->
         <!-- <button type="submit">Pay Now</a></button> -->
  <!-- <button><a href="signedin.php">Pay later</a></button> -->
      <!-- </div> -->
</div>

</body>
</html>