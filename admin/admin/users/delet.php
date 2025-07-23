<?php
include '../../../config.php';
include 'index.php';
if (isset ($_GET['deletid'])){
    $id = $_GET['deletid'];

    $query = "DELETE FROM `usertb` WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if ($result){
        header('location::index.php');
    }else{
        die(mysqli_error($con));
    }
    
}
?>