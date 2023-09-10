<?php
session_start();
ob_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Service</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" style="background-color: #e3f2fd;">
        <div class="container-fluid ps-5">
            <a class="navbar-brand" href="index.php">Car Service</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contect">Contact</a>
                    </li>
                </ul>
                <div class="d-flex pe-5">
                    <a href="./logout.php" class="btn btn-light">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="send-service-req py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1>Send Service Request</h1>
                </div>
            </div>
            <form method="post" class="border p-5 rounded">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="oname" class="form-label">Owner Name</label>
                            <input type="text" class="form-control" id="oname" name="oname" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="vname" class="form-label">Vehicle name</label>
                            <input type="text" class="form-control" id="vname" name="vname" value="">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" cols="30" rows="5" value="" class="form-control"
                                required></textarea>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact</label>
                            <input type="number" class="form-control" id="contact" name="contact" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="vnumber" class="form-label">Vehicle Number</label>
                            <input type="text" class="form-control" id="vnumber" name="vnumber" value="" required>
                        </div>
                        <div class="mb-3">
                            <label for="vnumber" class="form-label">Select Services</label>
                            <hr>
                            <?php 
                                $qry="select * from services where isActive=1";
                                $result=mysqli_query($conn,$qry) or die('Not come');
                                while($r=mysqli_fetch_assoc($result)):
                            ?>
                            <label for="<?php echo $r['sname']?>"><?php echo $r['sname']?></label>
                            <input type="checkbox" class="form-check-input" id="<?php echo $r['sname']?>"
                                name="services[]" value="<?php echo $r['sname']?>" checked>
                            <?php endwhile;?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark" name="submit">Send Request</button>
                <?php 
                    if(isset($_POST['submit'])){
                        // print_r($_POST);
                        $oname=$_POST['oname'];
                        $contact=$_POST['contact'];
                        $address=$_POST['address'];
                        $vnumber=$_POST['vnumber'];
                        $vname=$_POST['vname'];
                        $services=implode(',',$_POST['services']);
                        $qry="INSERT INTO `service_request`(`oname`, `contact`, `address`, `vnumber`, `vname`, `services`) 
                        VALUES ('$oname','$contact','$address','$vnumber','$vname','$services')";
                        $result=mysqli_query($conn,$qry);
                        if($result){
                            // alert_message('Request send successfully!');
                            header('Location: ./',);
                        } else{
                            // alert_message('Not inserted! ');
                        }
                    }
                ?>
                <!-- <button type="submit" class="btn btn-success" name="back">Back</button> -->
            </form>

        </div>

    </div>
    <!-- Services div -->
    <?php include './inc/footer.php'?>

    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
<?php 
ob_end_flush();
?>