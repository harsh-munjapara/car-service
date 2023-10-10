<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
if ($_SESSION['usertype'] != 'admin') {
    header('Location: ../','');
}

require '../connection.php';

$id = $_GET['id'];
$selectqry = "select * from service_request where id='{$id}'";
$qry = mysqli_query($conn, $selectqry);
$arrdata = mysqli_fetch_array($qry);

if (isset($_POST['update'])) {
    $status = $_POST['status'];

    $qry = "update service_request set status={$status} where id={$id}";

    echo $qry . "<br>";
    mysqli_query($conn, $qry) or die('Not Inserted !!');

    echo "Request Updated Successfully :)";
    header('Location: ./request.php');
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
            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center my-5">Manage Services Request</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <form action="" method="post" class="border p-5" style="width: 50%; margin:auto;">
                                <h1 style="text-align: center;">Service Detail</h1>
                                <hr>
                                <div class="mb-3">
                                    <?php
                                        $show = "select * from service_request where id={$id}";
                                        $data = mysqli_query($conn, $show) or die('Not Inserted !!');
                                        $row = mysqli_fetch_assoc($data);
                                    ?>

                                    <h4>Owner Name : <?php echo $row['oname'] ?></h4>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="">Select...</option>
                                        <option value="0">Pending</option>
                                        <option value="1">Done</option>
                                        <option value="2">Active</option>
                                        <option value="3">cancelled</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="update">Change</button>
                                <!-- <button type="submit" class="btn btn-success" name="back">Back</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>