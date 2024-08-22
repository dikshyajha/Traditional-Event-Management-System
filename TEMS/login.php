<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="formstyle.css">
    <script type="text/javascript">
function validateForm()
{
    var error="";
    //  var name = document.getElementByname( "name" );
    var name=document.myform2.name.value;
    if( name.value == "" )
    {
  error = " You Have To Write Your Name. ";
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }

//  var email = document.getElementByname( "email" );

    var b=document.myform2.email.value;
    var atposition= b.indexOf("@");
    var dotposition=b.lastIndexOf(".");
if(atposition<1 || dotposition<atposition+2 || dotposition+2>=b.lenght){
     alert(" Please Enter Valid Email Address. ");
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }

//  var password = document.getElementById( "password" );
var password=document.myform2.password.value
 if( password=="" || password.length<= 6 )
 {
  alert(" Password Must Be More Than Or Equal To 6 Digits. ");
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }
//  alert("inputs verified send for login check");

//  else
//  {
//   return true;
//  }
}

</script>
</head>
<body>
<div class="formfull">
    <div class="navbar">
            <a href="index.php"> <img src="photo/logo.png" class="logo" /></a>
        </div>
    <div class="containerform">
        <div class="topic">Log In</div>
        <form name="myform2" method="post" action="loginchk.php" onSubmit="return validateForm(); return false;">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="name" placeholder="Enter your username">
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="example@gmail.com ">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="Log In">
                </div>
            </form>
            </div>
</div>
</body>
</html>