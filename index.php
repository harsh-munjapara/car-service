<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

require 'connection.php';
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
        background-repeat:no-repeat;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar shadow-lg navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color: #e3f2fd;">
        <div class="container-fluid ps-5">
            <a class="navbar-brand" href="index.php">Car Service</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contect">Contact</a>
                    </li>
                </ul>
                <div class="d-flex pe-5">
                    <a href="./logout.php" class="btn btn-light">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero div -->
    <div class="hero bg-dark text-white  py-5" id="home">
        <div class="container">
            <h1 class="display-4 fw-medium mt-5">Hello ! <?php echo $_SESSION['username']; ?></h1>
            <h3 class="">Welcome To Car's Hospital</h3>
            <p>At our Company, we take pride in providing top-notch car services to ensure your vehicle runs at peak performance. With a team of skilled technicians and state-of-the-art equipment, we offer a comprehensive range of services tailored to meet your specific needs.</p>
            <a href="./send_req.php" class="btn btn-light btn-lg">Send Request</a>
        </div>
    </div>
    <?php include './inc/footer.php'?>
    <!-- Services div -->
    <!-- <div class="services py-5" id="service">
        <div class="container">
            <h2 class="text-center mb-5">OUR SERVICES</h2>
            <div class="row">
                <?php
                $qry = "select * from services where isActive='1'";
                $result = mysqli_query($conn, $qry);
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src=".<?php echo $r['image']?>" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $r['sname']?></h5>
                            <p class="card-text"><?php echo $r['serviceDesc']?></p>
                            <button class="btn btn-dark">Get Service</button>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div> -->

    <!-- About Us div -->

    <!-- Contact div -->
    </div>
    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>