<?php
session_start();
$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "traditional";
$port = 3306;
$con = mysqli_connect($server, $username, $password, $dbname, $port);
if(!$con)
    die("Couldn't connect to server");
$dbcr=mysqli_query($con,"Create Database if not exists traditional");
if(!$dbcr)
    die("Unable to create db");
else echo"db connected/created";
$con=mysqli_connect($server, $username, $password, $dbname, $port);
if(!$con)
{
    echo("Couldnot connect");
}

$sqlitable="CREATE TABLE  if not exists venue
(V_id int AUTO_INCREMENT,V_name varchar(40),V_address varchar(30),V_number varchar(10),V_email varchar(30) ,Seat int,D_Price int,P_price int,status int(1) DEFAULT 1,PRIMARY KEY(V_id))";
    $table=mysqli_query($con,$sqlitable);
    if (!$table)
        die("No table created");
    else
        echo("Table foundd");
$sql="SELECT *FROM venue";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);
// echo $result['name']." ".$result['user']." ".$result['email']." ".$result['number']." ".$result['password'];
// echo $total;

$sql="INSERT INTO venue(V_name,V_address,V_number,V_email,Seat,D_Price,P_price) VALUES ('OM Party Palace','Dhapasi,Tokha-06','9812312312','om@gmail.com','1000','1000','1000'),('Green Garden Palace','Koteshwor','9814564561','greegp@gmail.com','800','850','800'),('Everyday Banquet','Budhanilkantha','9819988998','everyday@gmail.com','600','750','900'),('Hamro Banquet','Swayambhu','98010000111','hamro@gmail.com','1000','750','1000'),('Swastik Party Palace','Maitidevi','9819819819','swastik@gmail.com','1000','750','700')";
$result=mysqli_query($con,$sql);
// if(!$result){
//     echo("venue data submitted");
// }
// else{
//     echo(" venue data failed");
//     }
$sqlitable="CREATE TABLE  if not exists priest
(P_id int AUTO_INCREMENT,P_name varchar(40),P_age int,P_address varchar(30),P_number varchar(10) ,P_quali varchar(20),P_exp int,P_price int,status int(1) DEFAULT 1,PRIMARY KEY(P_id))";
$sqlialter="ALTER TABLE priest AUTO_INCREMENT=100";
    $table=mysqli_query($con,$sqlitable);
    if (!$table)
        die("No priest table created");
    else
        echo(" priest Table foundd");

 $sql="INSERT INTO priest(P_name,P_age,P_address,P_number,P_quali,P_exp,P_price) VALUES ('Vedik Acharya','70','Kalanki','9812121212','Doctorate','43','50'),('Mirtunjaya Mishra','60','Balaju','9814564566','Acharya','35','45'),('Tulsi Pandit','60','Sitapaila','9819988888','Shastri','35','40'),('Shyam Pandey','35','Bafal','98010000222','B.E.S','8','25'),('Dev Pandit','35','Tahachal','9819819810','B.E.S','8','21')";
 $result=mysqli_query($con,$sql);
//  if(!$result){
//      echo("priest data submitted");
//  }
//  else{
//      echo(" priest data failed");
//      }
$sqlitable="CREATE TABLE  if not exists customer
        (C_id int NOT NULL AUTO_INCREMENT,u_id int,username varchar(20),name varchar(15), email varchar(30),number varchar(10) ,address varchar(20),date DATE NOT NULL,event varchar(15),venue varchar(30),priest varchar(20),price int,pt_id varchar(30),status int(1) DEFAULT 1,PRIMARY KEY(C_id), payment_stauts int(1) DEFAULT 0)";
    $table=mysqli_query($con,$sqlitable);
    if (!$table)
        die("No customer table created");
    else
        echo(" Customer Table foundd");
        
$sqlitable="CREATE TABLE  if not exists register
        (R_id int NOT NULL AUTO_INCREMENT,name varchar(15),user varchar(12), email varchar(30),number varchar(10) ,password varchar(15),gender varchar(10),status int(1) DEFAULT 1,PRIMARY KEY(R_id))";
    $table=mysqli_query($con,$sqlitable);
    if (!$table)
    die("No table created");
    else
    echo("Table foundd");
    mysqli_close($con);
?>

