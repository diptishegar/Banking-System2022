<?php
    $servicename = "localhost";
    $username = "root";
    $password = "";
    $db = "bankingsystem";

    $conn = mysqli_connect($servicename,$username,$password, $db);
    if($conn -> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
?>