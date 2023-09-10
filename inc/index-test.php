<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color: #e3f2fd;">
        <div class="container-fluid ps-5">
            <a class="navbar-brand" href="index.php">Car Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                    <a href="./login.php" class="btn btn-light">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Hero div -->
    <div class="hero bg-primary text-white text-center py-5" id="home">
        <div class="container">
            <h1 class="display-4"> Car Service</h1>
            <p class="lead">Your trusted partner in automotive care</p>
            <a href="./user_home.php" class="btn btn-light btn-lg">Send Request</a>
        </div>
    </div>

    <!-- Services div -->
    <div class="services py-5" id="service">
        <div class="container">
            <h2 class="text-center mb-5">OUR SERVICES</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./img/oilchange.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body">
                            <h5 class="card-title">Oil Change</h5>
                            <p class="card-text">Regular oil changes to keep your engine running smoothly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./img/TireRotation.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body">
                            <h5 class="card-title">Tire Rotation</h5>
                            <p class="card-text">Ensure even tire wear and improve handling with tire rotation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./img/BrakeService.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Brake Service</h5>
                            <p class="card-text">Keep your brakes in top condition for safety and performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="./img/BrakeService.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body">
                            <h5 class="card-title">Brake Service</h5>
                            <p class="card-text">Keep your brakes in top condition for safety and performance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us div -->
    <div class="about py-5" id="aboutus">
        <div class="container">
            <h2 class="text-center mb-5">ABOUT US</h2>
            <div class="row row-gap-5">
                <div class="col-md-6">
                    <div class="card p-4 shadow">
                        <h3>Our Mission</h3>
                        <p>Our mission is to ensure the safety, reliability, and performance of your vehicles. We take pride in offering a wide range of services, from routine maintenance to complex repairs, all designed to keep you on the road with peace of mind.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-4 shadow">
                        <p>Morbi eget urna ut tellus venenatis tincidunt. Donec nec varius velit, sit amet laoreet justo. Nulla facilisi.</p>
                    </div>
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
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; Car Service by three partners</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>