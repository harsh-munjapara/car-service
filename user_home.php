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
</head>

<body>
    <h1>I am Harit tilavat</h1>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color: #e3f2fd;">
        <div class="container-fluid ps-5">
            <a class="navbar-brand" href="#home">Car Service</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
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
    <div class="hero bg-primary text-white text-center py-5" id="home">
        <div class="container">
            <h1 class="display-4">Hello ! <?php echo $_SESSION['username']; ?></h1>
            <p class="lead">Welcome To Car's Hospital</p>
            <a href="./send_req.php" class="btn btn-light btn-lg">Send Request</a>
        </div>
    </div>

    <!-- Services div -->
    <div class="services py-5" id="service">
        <div class="container">
            <h2 class="text-center mb-5">OUR SERVICES</h2>
            <div class="row">
                <?php
                $qry = "select * from services where isActive='1'";
                $result = mysqli_query($conn, $qry);
                while ($r = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-4 mt-5">
                        <div class="card">
                            <img src="./img/<?php echo $r['image']; ?>" class="card-img-top rounded" alt="Service" width="420px" height="220px">
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
    </div>

    <!-- About Us div -->
    <div class="about py-5" id="aboutus">
        <div class="container">
            <h2 class="text-center mb-5">ABOUT US</h2>
            <div class="row">
                <div class="col-md-5 card mx-5 p-5 shadow">
                    <h3>Our Mission</h3>
                    <p>Our mission is to ensure the safety, reliability, and performance of your vehicles. We take pride in offering a wide range of services, from routine maintenance to complex repairs, all designed to keep you on the road with peace of mind.</p>
                </div>
                <div class="col-md-5 card mx-5 p-5 shadow">
                    <p>Morbi eget urna ut tellus venenatis tincidunt. Donec nec varius velit, sit amet laoreet justo. Nulla facilisi.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact div -->
    <div class="contact py-5 text-center" id="contect">
        <div class="container card border-dark">
            <h2 class="text-center mb-5 pt-4">CONTACT US</h2>
            <div>
                <h4>Contact Information</h4>
                <p>Email: hello@carservice.com</p>
                <p>Phone: +1 (123) 456-7890</p>
                <p>Address: 123 Sutex Complex, Surat, Bharat</p>
            </div>
        </div>

    </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="col-md- text-center">
                <p>Hope This Webside Is Useful To <?php echo $_SESSION['username']; ?></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>