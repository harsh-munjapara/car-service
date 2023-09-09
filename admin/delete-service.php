<?php
    require '../connection.php';

    $ids = $_GET['sid'];

    $qry = "delete from services where sid='{$ids}'"; 
    echo "$qry <br>";
    mysqli_query($conn, $qry) or die("Not Deleted !!");
    header('Location: service.php');
?>