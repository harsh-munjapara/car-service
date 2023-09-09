<?php
    require 'connection.php';

    if (isset($_POST['submit'])) {
        
        $uname = $_POST['crUname'];
        $pass = $_POST['createPass'];
        $conPass = $_POST['confirmPass'];
        $email = $_POST['email'];
        // $prob = implode(',', $_POST['prob']);

        // $encrypt_pass = password_hash($pass, PASSWORD_BCRYPT);

        if($pass === $conPass){
            $qry = "insert into user (username, password, email, type)values('{$uname}', '{$pass}', '{$email}', 'user')";
            echo $prob;
    
            mysqli_query($conn, $qry) or die('Not Inserted !!');

            header('Location: login.php');
        }
        else{
            // echo "Enter Same Password In Create Password And Confirm Password";
            echo "<script>
            alert('Enter Same Password In Create Password And Confirm Password');
            </script>";
        }
        // $check_pass = password_verify($pass, $encrypt_pass);

        // echo $check_pass;
        // echo "Data Inserted :)";
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="container m-5">
        <form action="" method="post" class="border border-dark rounded p-5" style="width: 50%; margin:auto;">
            <h1 style="text-align: center;">REGISTER</h1>
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fname" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="createUname" class="form-label">Create Username</label>
                <input type="text" class="form-control" id="createUname" name="crUname" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Create Password</label>
                <input type="password" class="form-control" id="inputPassword" name="createPass" required> 
            </div>

            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPass" required> 
            </div>
            
            <div class="text-center">
            <button type="submit" class="btn btn-primary mt-3" name="submit" onclick="Check()">Register</button>
            </div>
            <p class="mt-3">Have You Already Registered? <a href="./login.php">Log-in</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>