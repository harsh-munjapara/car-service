<?php

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'car_service';

    $conn = mysqli_connect($server, $username, $password, $db) or die('Not Connected');
    function alert_message($message){
        echo "<script> alert('$message') </script>";
    }
    // echo "Connected :)";
?>