<?php
    require '../connection.php';

    $ids = $_GET['id'];

    $qry = "delete from service_request where id='{$ids}'"; 
    echo "$qry <br>";
    mysqli_query($conn, $qry) or die("Not Deleted !!");
    header('Location: request.php');
?>