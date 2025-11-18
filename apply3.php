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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="linkstyle.css">
    <script type="text/javascript">
function validateForm()
{
    var error="";
    //  var name = document.getElementByname( "name" );
    var cname=document.myform.cname.value;
    if( cname== "" )
    {
  alert(" You Have To Write Your Name. ");
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }
 var address=document.myform.address.value;
    if( address == "" )
    {
  alert(" You Have To Write Your address. ");
  var number=document.myform.cnumber.value;
  if(number==""){
    alert("Enter your number.");
  }
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }

//  var email = document.getElementByname( "email" );

    var b=document.myform.cemail.value;
    var atposition= b.indexOf("@");
    var dotposition=b.lastIndexOf(".");
if(atposition<1 || dotposition<atposition+2 || dotposition+2>=b.lenght){
     alert(" Please Enter Valid Email Address. ");
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }
 return true;
        alert("inputs verified send for login check");
    }

//  else
//  {
//   return true;
//  }
</script>
</head>
<body class="apply-body">
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
        <div class="booking">
            <div class="view">
                <p style="text-align:center">&nbsp &nbsp&nbsp&nbsp&nbsp Booked Details of Venue</p>
                <!-- <ul>
                <li><a href="booked.php">Click here to view booked detail</a></li> -->
                <!-- <li><a href="venue.php">Venue Details</a></li>
                <li><a href="priest.php">Priest Details</a></li> -->
                <!-- </ul>    -->
                <div class="cbooktb">
    <table border="1" style="width:100%">
    <!-- <th>C_id</th> -->
    <th >Date</th>
    <!-- <th>Event</th> -->
    <th>Venue</th>
    <th>Priest</th>

<?php
require_once "db.php";

$sql="SELECT *FROM customer";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);

if (mysqli_num_rows($retval) > 0) {
    while ($result = mysqli_fetch_assoc($retval)) {
        echo "
        <tr>
            <td>".$result['date']."</td>
            <td>".$result['venue']."</td>
            <td>".$result['priest']."</td>
        </tr>";
    }
}
?>
</table>
</div>
            </div>
            <div class="applyform">
            <div class="applytitle">Apply For Event</div>
            <form name="myform" method="post" action="applychk.php" onSubmit="return validateForm(); return false;">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Customer Name:</span>
                    <input type="text" name="cname" placeholder="Enter your username">
                </div>
                <div class="input-box">
                    <span class="details">Email address:</span>
                    <input type="text" name="cemail" placeholder="example@gmail.com ">
                </div>
                <div class="input-box">
                    <span class="details">Customer Number:</span>
                    <input type="text" name="cnumber" placeholder="+9770000000000 ">
                </div>
                <div class="input-box">
                    <span class="details">Address:</span>
                    <input type="text" name="address" placeholder="Sitapaila,kathmandu">
                </div></div>
               <div class="services-checkbox">
                <div class="levent">
                    <span class="details">Date:</span>
                    <input type="date" id="start" name="trip-start" value="2023-01-01" min="2023-01-01" max="2025-12-31">
                </div>
                <div class="levent">
                    <span class="details">Event:</span>
                    <select name="events">
                        <option value="wedding">Wedding</option>
                        <option value="bratabanda">Bratabanda</option>
                        <option value="pasni">Pasni</option>
                    </select>
                </div>
                <div class="levent">
                    <span class="details">Venue:</span>
                    <select name="venue">
                            <option value="OM Party Palace">OM Party Palace(capacity:1000)</option>
                            <option value="Green Garden Palace">Green Garden Palace(capacity:800)</option>
                            <option value="Everyday Banquet">Everyday Banquet(capacity:600)</option>
                            <option value="Hamro Banquet">Hamro Banquet(capacity:1000)</option>
                            <option value="Swastik Party Palace">Swastik Party Palace(capacity:1000)</option>
                    </select>
                </div>  
                <div class="levent">
                    <span class="details">Priest:</span>
                    <select name="priest">
                            <option value="Vedik Acharya">Vedik Acharya(price:50)</option>
                            <option value="Mirtunjaya Mishra">Mirtunjaya Mishra(price:45)</option>
                            <option value="Tulsi Pandit">Tulsi Pandi(price:40)</option>
                            <option value="Shyam Pandey">Shyam Pandey(price:25)</option>
                            <option value="Dev Pandit">Dev Pandit(price:21)</option>
                    </select>
                </div>  
            </div>
                    
                <div class="button">
                    <input type="submit" name="submit" value="Apply">
                </div>
            
                </form>
            </div>
</body>
</html>