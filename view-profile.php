<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>

</body>

</html>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
$uname=$_SESSION['username'];
require 'connection.php';

$selectqry = "select * from  user where username='$uname'";
$result = mysqli_query($conn, $selectqry);
$row=mysqli_fetch_array($result);
if(isset($_POST['submit'])){
    print_r($_POST);
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qry="UPDATE `user` SET `username`='$username',`password`='$password',`email`='$email',`type`='user' where username='$uname'";
    echo "$qry";
    $res=mysqli_query($conn,$qry) or die('not updated');
    if($res){
        header("Location: ./view-profile.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
    .hero {
        background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('./img/car-image.jpg');
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include './inc/top-navbar.php'; ?>
    <!-- Hero div -->
    <div style="">
        <div class="form-bg my-5">
            <div class="container ">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-6">
                        <div class="form-input-content">
                            <div class="card login-form mb-0">
                                <div class="card-body pt-5 shadow text-center">
                                    <h4 class="text-center">Profile Detail</h4>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">

                                            <div class="image">
                                                <img src="./img/profile.jpg" alt="profile">
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <h6><span class="me-4">Username:</span> <?php echo $row['username']?></h6>
                                        </li>
                                        <li class="list-group-item">
                                            <h6><span class="me-4">Email:</span> <?php echo $row['email']?></h6>
                                        </li>
                                        <li class="list-group-item">
                                            <h6><span class="me-4">Service Status:</span> <span
                                                    class="badge bg-warning">Pending</span></h6>
                                        </li>
                                        <li class="list-group-item">
                                            <h6>Service: comming soon. </h6>
                                        </li>
                                    </ul>
                                    <div class="form-group">
                                        <a href="./edit-profile.php" class="btn btn-dark">Edit Profile</a>
                                        <a href="./logout.php" class="btn btn-dark ms-3">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>