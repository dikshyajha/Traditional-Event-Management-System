<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="formstyle.css">
    <script type="text/javascript">
function validateForm()
{
    var error="";
    //  var name = document.getElementByname( "name" );
    var name=document.myform.name.value;
    if( name.value == "" )
    {
  error = " Please Write Your Name. ";
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }
 var uname=document.myform.user.value;
    if( uname.value == "" )
    {
  error = " Please write your username. ";
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }

//  var email = document.getElementByname( "email" );

    var b=document.myform.email.value;
    var atposition= b.indexOf("@");
    var dotposition=b.lastIndexOf(".");
if(atposition<1 || dotposition<atposition+2 || dotposition+2>=b.lenght){
     alert(" Please Enter Valid Email Address. ");
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }

//  var password = document.getElementById( "password" );
var password=document.myform.password.value;
 if( password=="" || password.length<= 6 )
 {
  alert(" Password Must Be More Than Or Equal To 6 Digits. ");
//   document.getElementById( "error_para" ).innerHTML = error;
  return false;
 }
 var confirmPassword = document.myform.cpassword.value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        var genderM=myform.gender.male;
    var genderF=myform.gender.female;
    var genderO=myform.gender.other;
    if(genderM==""&&genderF=""&&genderO==""){
        alert("Choose any one of the gender.");
        return false;
    }
    // if (genderM.checked==false && genderF.checked==false ) {
    //     alert("You must select male or female");
    //     return false;
    // } 

        alert("inputs verified send for login check");
    }

//  else
//  {
//   return true;
//  }
</script>
</head>
<body>
    <div class="formfull">
    <div class="navbar">
            <a href="index.php"> <img src="photo/logo.png" class="logo" /></a>
        </div>
         <div class="containerform">
        <div class="topic">Registration</div>
        <form name="myform" method="post" action="regchk.php" onSubmit="return validateForm(); return false;">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter your name">
                </div>
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="user"placeholder="Enter your username">
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text"name="email" placeholder="example@gmail.com ">
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="number"placeholder="Enter your phone number">
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password">
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" name="cpassword" placeholder="Confirm your password">
                </div>
                </div>
                <div class="gender">
                    <span class="choose-gender">Gender</span><br>
                    <input type="radio" name="gender" value="male" >Male 
                    <input type="radio" name="gender" value="female" >Female         
                    <input type="radio" name="gender" value="other">Other
                </div>
                <div class="button">
                    <input type="submit" value="Register">
                </div>
                Already have an account? <a href="login.php">Log in</a>

        </form>
    </div>
</div>
</body>
</html>