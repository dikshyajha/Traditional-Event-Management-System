<?php 
    $ps=$_GET['PS'];
    $rc=$_GET['RC'];
   
    echo $ps,$rc;
    if(($ps=='true')||($rc=='successful')){
        header("Location: success.php");
                die;
    }
    else{
        header("Location: failed.php");
                die;
    }
?>