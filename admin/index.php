<?php
session_start();
    // echo "<h1> $</h1>"
    // print_r($_SESSION);

if (!$_SESSION['username']) {
    header('Location: ../','');
}
if ($_SESSION['usertype'] != 'admin') {
    header('Location: ../','');
}

require '../connection.php';

$userQry = "select * from  user";
$serviceQry = "select * from  services";
$finishQry = "select * from  service_request where status=1";
$requestQry = "select * from  service_request";


$totalUser=mysqli_num_rows(mysqli_query($conn, $userQry));
$totalService=mysqli_num_rows(mysqli_query($conn, $serviceQry));
$totalFinished=mysqli_num_rows(mysqli_query($conn, $finishQry));
$totalRequest=mysqli_num_rows(mysqli_query($conn, $requestQry));
// Total Numbers of Rows will be counted...
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <style>
        
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php require('sidebar.php') ?>
            <div class="col py-3">
                <div class="container">
                    <h1 class=" mt-5">Dashboard</h1> <hr>
                </div>
                <div class="containe">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card text-white bg-primary " >
                                <div class="card-header">
                                    <h4>Total Services</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $totalService?> </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card text-white bg-success " >
                                <div class="card-header">
                                    <h4>Service Request</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $totalRequest?> </h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card text-white bg-danger " >
                                <div class="card-header">
                                    <h4>Finished Request</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $totalFinished?></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card text-white bg-warning " >
                                <div class="card-header">
                                    <h4>Users</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $totalUser?></h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>