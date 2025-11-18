<?php
require_once "db.php";

$n=10;
function randoms($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}
 
// echo randoms($n);

$Randomnumber=randoms($n);
$sql="SELECT *FROM customer";
$retval=mysqli_query($con,$sql);
$result=mysqli_num_rows($retval);
// if($retval!=0){
    // $result=mysqli_fetch_assoc($retval);
    while(($result=mysqli_fetch_assoc($retval))){
        $Randomnumber=randoms($n);
    }
// }
{
    {
        $MD = 'P';
        $AMT = $_SESSION['total'];
        $CRN = 'NPR';
        $DT = date('m/d/Y');
        $R1 = 'test';
        $R2 = 'test';
        $RU = 'https://localhost/php/project/heram.php'; //fully valid verification page link
        $PRN =$Randomnumber;
        $_SESSION['pt_id']=$PRN;
        $PID = 'NBQM';
        $sharedSecretKey = 'a7e3512f5032480a83137793cb2021dc';
        $DV = hash_hmac('sha512', $PID . ',' . $MD . ',' . $PRN . ',' . $AMT . ',' . $CRN . ',' . $DT . ',' . $R1 . ',' . $R2 . ',' . $RU, $sharedSecretKey);
        $paymentLiveUrl = 'https://clientapi.fonepay.com/api/merchantRequest';
        $paymentDevUrl = 'https://dev-clientapi.fonepay.com/api/merchantRequest';
    }
}?>