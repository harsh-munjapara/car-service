
<nav class="navbar shadow-lg navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color: #e3f2fd;">
    <div class="container ps-5">
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
            <div class="dropdown">
                <div class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="./img/<?php echo $row['img']; ?>" alt="" width="50px" height="50px" class="rounded-circle">
                    <span class="text-white"><i class="fa-solid fa-caret-down"></i></span>
                </div>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="./view-profile.php">View Profile</a></li>
                    <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>