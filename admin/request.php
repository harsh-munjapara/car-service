<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

require '../connection.php';
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
                <div class="container">
                    <h1 class="text-center mt-5">This is Request Table</h1>
                    <div class="search mb-5">
                        <label for="search">Search here... </label>
                        <input type="text" name="" id="search" class="form-control w-25 border-dark">
                        
                    </div>
                    <div class="table-responsive text-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>OWNER</th>
                                    <th>CONTECT No.</th>
                                    <th>ADDRESS</th>
                                    <th>Car_NUMBER</th>
                                    <th>CAR_NAME</th>
                                    <th>SERVICES</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $qry = "select * from service_request";
                                $result = mysqli_query($conn, $qry);
                                while ($r = mysqli_fetch_assoc($result)) :
                                ?>
                                    <tr>
                                        <td><?php echo $r['id'] ?></td>
                                        <td><?php echo $r['oname'] ?></td>
                                        <td><?php echo $r['contact'] ?></td>
                                        <td><?php echo $r['address'] ?></td>
                                        <td><?php echo $r['vnumber'] ?></td>
                                        <td><?php echo $r['vname'] ?></td>
                                        <td><?php echo $r['services'] ?></td>
                                        <td>
                                            <a href="edit-service.php?sid=<?php echo $r['id'] ?>" class="btn btn-success">Edit</a>
                                            <a href="delete-service.php?sid=<?php echo $r['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>