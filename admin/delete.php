<?php
    require '../connection.php';

    $ids = $_GET['sid'];

    $qry = "delete from user where id='{$ids}'";

    mysqli_query($conn, $qry) or die("Not Deleted !!");

    header('Location: ./');
?>