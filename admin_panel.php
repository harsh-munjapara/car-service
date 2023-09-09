<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <title> Car Service </title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline"><i class="fa fa-car"></i> Car Service</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item mt-2">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 fa fa-home"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="mt-2">
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 fa fa-tachometer"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        </li>
                        <li class="mt-2">
                            <a href="./user_rec.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 fa fa-users"></i> <span class="ms-1 d-none d-sm-inline">Users</span> </a>
                        </li>
                        <li class="mt-2">
                            <a href="" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 fa fa-info-circle"></i> <span class="ms-1 d-none d-sm-inline">Services</span> </a>
                        </li>
                        <li class="mt-2">
                            <a href="./logout.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 fa fa-sign-out"></i> <span class="ms-1 d-none d-sm-inline">Log Out</span> </a>
                        </li>

                    </ul>
                    <hr>
                    <!-- <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div> -->
                </div>
            </div>
            <div class="col py-3">
                hello, <?php echo "<h1>" . $_SESSION['username'] . "</h1>"; ?>
            </div>
        </div>
    </div>
</body>

</html>