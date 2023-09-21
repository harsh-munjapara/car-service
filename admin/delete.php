<?php

require '../connection.php';

$ids = $_GET['sid'];

$qry = "delete from user where username='{$ids}'";
$req_del_qry = "delete from service_request where oname = '{$ids}'";  

mysqli_query($conn, $qry) or die("Not Deleted !!");
mysqli_query($conn, $req_del_qry) or die("Not Deleted !!");

header('Location: user_rec.php');

?>