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
        <div class="form-bg mt-5">
            <div class="container ">
                <div class="row justify-content-center h-100">
                    <div class="col-xl-6">
                        <div class="form-input-content">
                            <div class="card login-form mb-0">
                                <div class="card-body pt-5 shadow">
                                    <h4 class="text-center">Edit Your Profile</h4>
                                    <form method="POST" action="">
                                        <div class="form-group mb-4">
                                            <label>User name :</label>
                                            <input type="text" class="form-control" value="<?php echo $row['username']?>" name="username">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label>Email :</label>
                                            <input type="email" class="form-control" value="<?php echo $row['email']?>" name="email">
                                        </div>

                                        <div class="form-group mb-4">
                                            <label>Password:</label>
                                            <input type="password" class="form-control" value="<?php echo $row['password']?>" name="password">
                                        </div>

                                        <div class="form-group mb-4 ">
                                            <label class="form-check-label">Profile Image :</label>
                                            <input type="file" class="form-control" name="profile">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark" name="submit">Save</button>
                                            <a href="./view-profile.php" class="btn btn-dark">Cancle</a>
                                        </div>
                                    </form>
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