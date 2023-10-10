<?php
session_start();
if ($_SESSION['usertype'] != 'admin') {
    header('Location: ../','');
}
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

require '../connection.php';

// $selectqry = "select * from services where sid='{$id}'";
// $qry = mysqli_query($conn, $selectqry);
// $arrdata = mysqli_fetch_array($qry);

if (isset($_POST['submit'])) {
    $new_sname = $_POST['sname'];
    $new_image = $_FILES['image']['name'];
    $new_desc = $_POST['service_desc'];
    $new_price = $_POST['price'];
    $new_active = $_POST['is_active'];

    // $qry = "insert into services values sname='{$new_sname}', serviceDesc='{$new_desc}',image='{$new_image}', isActive={$new_active}, price={$new_price}";
    $qry = "INSERT INTO `services`(`sname`, `image`, `serviceDesc`, `isActive`, `price`) VALUES ('$new_sname','$new_image','$new_desc',$new_active,$new_price)";
    echo $qry. "<br>";
    mysqli_query($conn, $qry) or die('Not Inserted !!');

    if (isset($_FILES['image'])) {
           
        print_r($_FILES);
        echo "<br>";

        
        $file_name = $_FILES['image']['name'];
        $temp_file = $_FILES['image']['tmp_name'];

        echo "$file_name"."<br>";
        echo "$temp_file";
        
        move_uploaded_file($temp_file, '../img/'.$file_name) or die('Not Uploded');
    }

    header('Location: service.php');
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
                            <h1 class="text-center my-5">Manage Services Table</h1>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <form action="" method="post" enctype="multipart/form-data" class="border p-5 w-50 m-auto">
                                <h1 style="text-align: center;">Insert Record</h1><hr>
                                <div class="mb-3">
                                    <label for="sname" class="form-label">Serivce Name</label>
                                    <input type="text" class="form-control" id="sname" name="sname" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="change_image" class="form-label">Choose Service Image</label>
                                    <input type="file" class="form-control" id="change_image" name="image" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Service Description</label>
                                    <textarea name="service_desc" id="" cols="30" rows="5" value="" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="is_active" class="form-label">Service Active ?</label>
                                    <select name="is_active" id="is_active" class="form-control" required>
                                        <option value="">Select...</option>
                                        <option value="0">In Active</option>
                                        <option value="1" >Active</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Insert</button>
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