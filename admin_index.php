<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin index</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Car Service</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-dark"><a href="./logout.php" class="text-decoration-none text-white">Logout</a></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="text-center">
        <h3>
            Hello ! <?php echo $_SESSION['username']; ?>
        </h3>
    </div>
    <main class="container mt-5">
        <p>Data ABout Users</p>
        <button type="button" class="btn btn-dark"><a href="./user_rec.php" class="text-decoration-none text-white">Data Of Users</a></button>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>