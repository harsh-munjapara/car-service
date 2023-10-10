<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
if ($_SESSION['usertype'] != 'admin') {
    header('Location: ../','');
}

require '../connection.php';

$id = $_GET['sid'];
$selectqry = "select * from services where sid='{$id}'";
$qry = mysqli_query($conn, $selectqry);
$arrdata = mysqli_fetch_array($qry);

if (isset($_POST['update'])) {
    $new_sname = $_POST['sname'];
    $new_desc = $_POST['service_desc'];
    $new_price = $_POST['price'];
    $new_active = $_POST['is_active'];
    // $new_img = ;
    $qry = "update services set sname='{$new_sname}', serviceDesc='{$new_desc}', isActive={$new_active}, price={$new_price}  where sid={$id}";
    echo $qry. "<br>";
    mysqli_query($conn, $qry) or die('Not Inserted !!');
    if ($_FILES['change_img']['name'] != '') {
        
        $file_name = $_FILES['change_img']['name'];
        $temp_file = $_FILES['change_img']['tmp_name'];
        
        $change_img =  "update services set image = '{$file_name}' where sid={$id}";
        mysqli_query($conn, $change_img) or die('not Uploded');
        
        move_uploaded_file($temp_file, '../img/' . $file_name) or die('Not Uploded');
    }
    
    echo "Updated Successfully :)";
    header('Location: ./service.php');
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
                            <form action="" method="post" class="border p-5" style="width: 50%; margin:auto;" enctype="multipart/form-data">
                                <h1 style="text-align: center;">EDIT RECORD</h1>
                                <hr>
                                <div class="mb-3">
                                    <label for="sname" class="form-label">Serivce Name</label>
                                    <input type="text" class="form-control" id="sname" name="sname" value="<?php echo $arrdata['sname']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="change_img" class="form-label">Choose Service Image</label>
                                    <input type="file" class="form-control" id="change_img" name="change_img" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Service Description</label>
                                    <textarea name="service_desc" id="" cols="30" rows="5" value="<?php echo $arrdata['serviceDesc'];?>" class="form-control"><?php echo $arrdata['serviceDesc'];?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price" name="price" value="<?php echo $arrdata['price']; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="is_active" class="form-label">Service Active ?</label>
                                    <select name="is_active" id="is_active" class="form-control" required>
                                        <option value="">Select...</option>
                                        <option value="0">In Active</option>
                                        <option value="1" >Active</option>
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