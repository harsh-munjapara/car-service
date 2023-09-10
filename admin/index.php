<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

require '../connection.php';

$selectqry = "select * from  user";

$qry = mysqli_query($conn, $selectqry);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php require('sidebar.php') ?>
            <div class="col py-3">
                <div class="container">
                    <h1 class="text-center mt-5">This is Dashboard</h1>
                </div>
                <div class="containe">
                    <div class="row">
                    <div class="card text-white bg-primary mx-2 mt-4" style="max-width: 18rem;">
                        <div class="card-header">Services</div>
                        <div class="card-body">
                            <h5 class="card-title">Total </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-success mx-2 mt-4" style="max-width: 18rem;">
                        <div class="card-header">Services</div>
                        <div class="card-body">
                            <h5 class="card-title">Total </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mx-2 mt-4" style="max-width: 18rem;">
                        <div class="card-header">Services</div>
                        <div class="card-body">
                            <h5 class="card-title">Total </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card text-white bg-warning mx-2 mt-4" style="max-width: 18rem;">
                        <div class="card-header">Services</div>
                        <div class="card-body">
                            <h5 class="card-title">Total </h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>