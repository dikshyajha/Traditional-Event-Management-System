<?php
    $server = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname   = "traditional";
    $port = 3306;

    $con = mysqli_connect($server, $username, $password, $dbname, $port);

    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }
?>
