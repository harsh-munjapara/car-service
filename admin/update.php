<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header('Location: login.php');
    }
    if ($_SESSION['usertype'] != 'admin') {
        header('Location: ../','');
    }
    require '../connection.php';

    $ids = $_GET['sid'];

    $showqry = "select * from user where id={$ids}";

    $qry = mysqli_query($conn, $showqry);

    $arrdata = mysqli_fetch_array($qry);

    if (isset($_POST['update'])) {
        
        $uname = $_POST['crUname'];
        $pass = $_POST['crPass'];
        $email = $_POST['email'];
        $qry = "update user set username='{$uname}', password='{$pass}', email='{$email}'  where id={$ids}";
        echo $qry. "<br>";

        mysqli_query($conn, $qry) or die('Not Inserted !!');

        echo "Updated Successfully :)";

        header('Location: user_rec.php');
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container m-5">
        <form action="" method="post" class="border p-5" style="width: 50%; margin:auto;">
            <h1 style="text-align: center;">EDIT RECORD</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $arrdata['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="createUname" class="form-label">Username</label>
                <input type="text" class="form-control" id="createUname" name="crUname" value="<?php echo $arrdata['username']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="crPass" value="<?php echo $arrdata['password']; ?>" required> 
            </div>
            
            <button type="submit" class="btn btn-primary" name="update">Change</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
