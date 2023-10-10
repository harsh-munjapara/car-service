<?php
session_start();
// echo "<h1> $</h1>"
// print_r($_SESSION);
if ($_SESSION['usertype'] != 'admin') {
    header('Location: ../','');
}
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
}

$uname = $_SESSION['username'];
require '../connection.php';

$selectqry = "select * from user where username='{$uname}'";
$result = mysqli_query($conn, $selectqry);
$row = mysqli_fetch_array($result);

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
                <div class="container text-center">
                    <h1 class=" mt-5">PROFILE</h1>
                    <hr>
                </div>
                <div style="">
                    <div class="form-bg my-5">
                        <div class="container ">
                            <div class="row justify-content-center h-100">
                                <div class="col-xl-6">
                                    <div class="form-input-content">
                                        <div class="card login-form mb-0">
                                            <div class="card-body pt-5 shadow text-center">
                                                <h4 class="text-center">Admin</h4>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">

                                                        <div class="image">
                                                            <img src="../img/<?php echo $row['img']; ?>" class="img-fluied rounded-circle" alt="profile" width="200px" height="200px">
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <h6><span class="me-4">Username:</span> <?php echo $row['username']; ?></h6>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <h6><span class="me-4">Email:</span> <?php echo $row['email']; ?></h6>
                                                    </li>
                                                </ul>
                                                <div class="form-group mt-2">
                                                    <a href="./edit-admin-profile.php" class="btn btn-dark">Edit Profile</a>
                                                    <a href="../logout.php" class="btn btn-dark ms-3">Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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