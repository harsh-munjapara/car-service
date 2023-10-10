<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
if ($_SESSION['usertype'] != 'admin') {
    header('Location: ../','');
}

require '../connection.php';

$selectqry = "select * from  user";

$qry = mysqli_query($conn, $selectqry);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php require('sidebar.php') ?>
            <div class="col py-3">
                <div class="container">
                    <h1 class="text-center mt-5">Records Of Users</h1><hr>
                    <table class="table table-striped text-center mt-5">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th colspan="2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (mysqli_num_rows($qry) > 0) {
                                while ($r = mysqli_fetch_array($qry)) {
                            ?>
                                    <tr>
                                        <td><?php echo $r['id']; ?></td>
                                        <td><?php echo $r['username']; ?></td>
                                        <td><?php echo $r['email']; ?></td>
                                        <td><a href="delete.php?sid=<?php echo $r['username']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this user?')">Delete</a></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>