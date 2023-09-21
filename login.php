<?php
    session_start();

    require 'connection.php';

    if (isset($_POST['submit'])) {
        
        $username = $_POST['uname'];
        $password = $_POST['pass'];

        $check_pass = "select * from user where username='{$username}'";

        $qry = mysqli_query($conn, $check_pass);

        $count_pass = mysqli_num_rows($qry);

        if ($count_pass) {
            $data_fetch = mysqli_fetch_assoc($qry);

            $main_pass = $data_fetch['password'];
            // echo "<br> $main_pass";
            // echo "<br> $password";
            // $confirm = password_verify($password, $main_pass);

            $_SESSION['username'] = $data_fetch['username'];

            if ($main_pass == $password) {
                echo "Login Successfully !!";
                
                if ($data_fetch['type'] == 'admin') {
                    $_SESSION['usertype'] = $data_fetch['type'];
                    header('Location: ./admin/index.php');
                }
                else{
                    $_SESSION['usertype'] = $data_fetch['type'];
                    header('Location: index.php');
                }
            }
            else{
                echo "Password Incorrect !!";
            }
        }
        else{
            echo "Username Incorrect";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Login page</title>
</head>
<body>
    <div class="container my-5">
    <form action="" method="post" class="border border-dark rounded p-5" style="width: 40%; margin:auto;">
            <h1 style="text-align: center;"> LOG IN </h1>
            <div class="mb-3">
                <label for="uname" class="form-label"> Username</label>
                <input type="text" class="form-control border-dark" id="uname" name="uname" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label"> Password</label>
                <input type="password" class="form-control border-dark" id="pass" name="pass" required> 
            </div>
            
            <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary" name="submit">Login</button>
            </div>
            <p class="mt-3">If You'r Not Register please <a href="./register.php">Register</a> First</p>
        </form>
    </div>
</body>
</html>