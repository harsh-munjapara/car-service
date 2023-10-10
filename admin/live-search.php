<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
}
if ($_SESSION['usertype'] != 'admin') {
    header('Location: ../','');
}

require '../connection.php';

if(isset($_POST['query'])){
    $search = $_POST['query'];
    $query = "SELECT * FROM services WHERE sname LIKE '%$search%' OR serviceDesc LIKE '%$search%' OR price LIKE '%$search%' OR isActive LIKE '%$search%'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            // echo '<div>'.$row['sname'].' - '.$row['serviceDesc'].'</div>';
            echo '<tr>
                <td>'.$row['sname'].'</td>
                <td>
                    <span class="image-icon">
                        <img src="..'.$row['image'].'" alt="image" class="img-fluid rounded">
                    </span>
                </td>
                <td>'.$row['serviceDesc'].'</td>
                <td>'.$row['price'].'</td>
                <td>
                    <i class="'.($row['isActive'] ? 'fa fa-check' : 'fa fa-xmark').'"></i>
                </td>
                <td>
                    <div class="action d-flex column-gap-3">
                        <a href="edit-service.php?sid='.$row['sid'].'" class="btn btn-success">Edit</a>
                        <a href="delete-service.php?sid='.$row['sid'].'" class="btn btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</a>
                    </div>
                </td>
            </tr>';
        }
    } else {
        echo 'No results found';
    }
}
?>