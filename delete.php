<?php
    require 'connection.php';

    $ids = $_GET['id'];

    $qry = "delete from user where id='{$ids}'";

    mysqli_query($conn, $qry) or die("Not Deleted !!");

    header('Location: user_rec.php');
?>