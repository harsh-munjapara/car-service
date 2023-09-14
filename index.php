<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

$uname=$_SESSION['username'];
require 'connection.php';

$selectqry = "select * from user where username='{$uname}'";
$result = mysqli_query($conn, $selectqry);
$row = mysqli_fetch_array($result);
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
    <?php include './inc/top-navbar.php' ?>

    <!-- Hero div -->
    <div class="hero bg-dark text-white  py-5" id="home">
        <div class="container">
            <h1 class="display-4 fw-medium mt-5">Hello ! <?php echo $_SESSION['username']; ?></h1>
            <h3 class="">Welcome To Car's Hospital</h3>
            <p>At our Company, we take pride in providing top-notch car services to ensure your vehicle runs at peak
                performance. With a team of skilled technicians and state-of-the-art equipment, we offer a comprehensive
                range of services tailored to meet your specific needs.</p>
            <a href="./send_req.php" class="btn btn-light btn-lg">Send Request</a>
        </div>
    </div>
    <?php include './inc/footer.php' ?>
    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>