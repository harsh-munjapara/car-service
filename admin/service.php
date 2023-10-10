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
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php require('sidebar.php') ?>
            <div class="col py-3">
                <div class="container">
                    <h1 class="text-center mt-5">This is Services Table</h1>
                    <hr>
                    <div class="search mb-5">
                        <label for="search">Search Services... </label>
                        <input type="text" name="" id="search" class="form-control w-25 ">
                    </div>
                    <div class="table-responsive text-center">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <!-- <th>SID</th> -->
                                    <th>Service name</th>
                                    <th>Image</th>
                                    <th>Service Description</th>
                                    <th>Price</th>
                                    <th>IsActive</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="search-results">
                                <?php
                                $qry = "select * from services";
                                $result = mysqli_query($conn, $qry);
                                while ($r = mysqli_fetch_assoc($result)) :
                                ?>
                                    <tr>
                                        <!-- <td><?php echo $r['sid'] ?></td> -->
                                        <td><?php echo $r['sname'] ?></td>
                                        <td>
                                            <span class="image-icon">
                                                <img src="../img/<?php echo $r['image'] ?>" alt="image" class="img-fluid rounded">
                                            </span>
                                        </td>
                                        <td><?php echo $r['serviceDesc'] ?></td>
                                        <td><?php echo $r['price'] ?></td>
                                        <td>
                                            <i class="<?php echo $r['isActive'] ? 'fa fa-check' : 'fa fa-xmark' ?>"></i>
                                        </td>
                                        <td>
                                            <div class="action d-flex column-gap-3">
                                                <a href="edit-service.php?sid=<?php echo $r['sid'] ?>" class="btn btn-success">Edit</a>
                                                <a href="delete-service.php?sid=<?php echo $r['sid'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                        <div class="action">
                            <a href="add-service.php" class="btn btn-dark">Add Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var searchTerm = $(this).val();
                if (searchTerm !== null) {
                    $.ajax({
                        url: 'live-search.php',
                        type: 'POST',
                        data: {
                            query: searchTerm
                        },
                        success: function(data) {
                            $('#search-results').html(data);
                        }
                    });
                } else {
                    $('#search-results').html('');
                }
            });
        });
    </script>
</body>

</html>