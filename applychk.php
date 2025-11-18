<?php
session_start();
require_once "db.php";

// $sqlitable="CREATE TABLE  if not exists customer
//         (C_id int NOT NULL AUTO_INCREMENT,username varchar(20),name varchar(15), email varchar(30),number varchar(10) ,address varchar(20),date DATE NOT NULL,event varchar(15),venue varchar(30),priest varchar(20),PRIMARY KEY(C_id))";
//     $table=mysqli_query($con,$sqlitable);
//     if (!$table)
//         die("No table created");
//     else
//         echo("Table foundd");
    
$_SESSION['custname']=$name=$_POST['cname'];
$_SESSION['custemail']=$email=$_POST['cemail'];
$_SESSION['custnumber']=$number=$_POST['cnumber'];
$_SESSION['custaddress']=$address=$_POST['address'];
$_SESSION['custdate']=$date=$_POST['trip-start'];
$_SESSION['custevent']=$event=$_POST['events'];
$_SESSION['custvenue']=$venue=$_POST['venue'];
$_SESSION['custpriest']=$priest=$_POST['priest'];
$username=$_SESSION['uname'];
// $_SESSION['total']=$total;
$total=0;

$sqlv="SELECT *FROM venue";
$retvalv=mysqli_query($con,$sqlv);
$resultv=mysqli_num_rows($retvalv);
// echo $result['name']." ".$result['user']." ".$result['email']." ".$result['number']." ".$result['password'];
// echo $total;
if($retvalv){
    // $result=mysqli_fetch_assoc($retval);
    while(($resultv=mysqli_fetch_assoc($retvalv))){
     if($venue==$resultv['V_name']){
        $total+=$resultv['D_Price'];
        // $total+=(P_price*G_count);
        break;
     }
    }
}

$sqlp="SELECT *FROM priest";
$retvalp=mysqli_query($con,$sqlp);
$resultp=mysqli_num_rows($retvalp);
// echo $result['name']." ".$result['user']." ".$result['email']." ".$result['number']." ".$result['password'];
// echo $total;
if($retvalp){
    // $result=mysqli_fetch_assoc($retval);
    while(($resultp=mysqli_fetch_assoc($retvalp))){
        if($priest==$resultp['P_name']){
            $total+=$resultp['P_price'];
            break;
         }
    }
}

$_SESSION['total']=$total;

echo"$name,$email,$number,$address,$date,$event,$venue,$priest,$total";
$sql="INSERT INTO customer(username, name, email, number, address, date, event, venue, priest, price) VALUES
     ('$username','$name','$email','$number','$address','$date','$event','$venue','$priest','$total')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo("data failed");
}
else{
    echo("data submitted");
}
mysqli_close($con);

header("location:thanks.php");
?>