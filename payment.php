<?php
require_once "db.php";

$n=10;
function randomst($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

    

if(!$con)
{
    echo("Couldnot connect");
}
$c_id=randomst($n);
$sql="SELECT *FROM customer";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);
// if($retval!=0){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
        $c_id=randomst($n);
    }
// }
$epay_url ="https://uat.esewa.com.np/epay/main";
$success_url="https://localhost/php/project/success.php?q=su";
$failed_url="https://localhost/php/project/failed.php?q=fu";
$pid=$c_id;
$merchant_code="EPAYTEST"//for default

?>