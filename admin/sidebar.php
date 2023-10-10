<?php
// echo "<h1> $</h1>"
// print_r($_SESSION);
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
}
if ($_SESSION['usertype'] != 'admin') {
    header('Location: ../','');
}

$uname = $_SESSION['username'];
require '../connection.php';

$selectqry = "select * from user where username='{$uname}'";
$result = mysqli_query($conn, $selectqry);
$row = mysqli_fetch_array($result);

?>
<div class="sidebar col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-4 d-none d-sm-inline"><i class="fa fa-car"></i> Car Service</span>
        </a>
        
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="mt-2">
                <a href="admin_profile.php"  class="nav-link text-white px-0 align-middle">
                    <img class="rounded-circle" height="30" width="30" src="../img/<?php echo $row['img']; ?>"> <span class="ms-1 d-none d-sm-inline">Profile</span> </a>
            </li>
            <li class="mt-2">
                <a href="index.php"  class="nav-link text-white px-0 align-middle">
                    <i class="fs-4 fa fa-tachometer"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
            </li>
            <li class="mt-2">
                <a href="./user_rec.php" class="nav-link text-white px-0 align-middle">
                    <i class="fs-4 fa fa-users"></i> <span class="ms-1 d-none d-sm-inline">Users</span> </a>
            </li>
            <li class="mt-2">
                <a href="./service.php" class="nav-link text-white px-0 align-middle">
                    <i class="fs-4 fa fa-info-circle"></i> <span class="ms-1 d-none d-sm-inline">Services</span> </a>
            </li>
            <li class="mt-2">
                <a href="./request.php" class="nav-link text-white px-0 align-middle">
                    <i class="fs-4 fa fa-list-check"></i> <span class="ms-1 d-none d-sm-inline">Requests</span> </a>
            </li>
            <li class="mt-2">
                <a href="../logout.php" class="nav-link text-white px-0 align-middle">
                    <i class="fs-4 fa fa-sign-out "></i> <span class="ms-1 d-none d-sm-inline">Log Out</span> </a>
            </li>
        </ul>
        <hr>
    </div>
</div>