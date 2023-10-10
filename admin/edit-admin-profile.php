<?php
session_start();

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

if (isset($_POST['submit'])) {
    $new_username = $_POST['username'];
    $new_email = $_POST['email'];
    $new_pass = $_POST['password'];

    $qry = "update user set username = '{$new_username}', email = '{$new_email}', password = '{$new_pass}' where username = '{$uname}'";
    mysqli_query($conn, $qry) or die('not updated');
    $_SESSION['username'] = $new_username;

    if ($_FILES['profile']['name'] != '') {

        $file_name = $_FILES['profile']['name'];
        $temp_file = $_FILES['profile']['tmp_name'];

        $change_img =  "update user set img = '{$file_name}' where username = '{$uname}'";
        mysqli_query($conn, $change_img) or die('not Uploded');

        move_uploaded_file($temp_file, '../img/' . $file_name) or die('Not Uploded');
    }

    header('Location: admin_profile.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php require('sidebar.php') ?>
            <div class="col py-3">
                <div class="container text-center">
                    <h1 class=" mt-5">PROFILE</h1>
                    <hr>
                </div>
                <div class="form-bg mt-5">
                    <div class="container ">
                        <div class="row justify-content-center h-100">
                            <div class="col-xl-6">
                                <div class="form-input-content">
                                    <div class="card login-form mb-0">
                                        <div class="card-body pt-5 shadow">
                                            <h4 class="text-center">Edit Your Profile</h4>
                                            <form method="POST" action="" enctype="multipart/form-data">
                                                <div class="form-group mb-4">
                                                    <label>User name :</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['username']; ?>" name="username">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label>Email :</label>
                                                    <input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email">
                                                </div>

                                                <div class="form-group mb-4">
                                                    <label>Password:</label>
                                                    <input type="password" class="form-control" value="<?php echo $row['password'];  ?>" name="password">
                                                </div>

                                                <div class="form-group mb-4 ">
                                                    <label class="form-check-label">Profile Image :</label>
                                                    <input type="file" class="form-control" name="profile"> 
                                                    <!-- <input type="file" class="form-control" name="profile"> -->
                                                </div>
                                                <div class="form-group">
                                                    <!-- <button type="submit" class="btn btn-dark" name="submit">Save</button> -->
                                                    <input type="submit" name="submit" class="btn btn-dark" id="" value="Save">
                                                    <a href="./admin_profile.php" class="btn btn-dark">Cancle</a>
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
        </div>
    </div>
    <!-- <script>
    // JavaScript to clear the file input when a new file is selected
    document.querySelector('input[type="file"]').addEventListener('change', function () {
        this.previousElementSibling.innerHTML = ''; // Clear the old image name display
    });
</script> -->
</body>

</html>