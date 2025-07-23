<?php
include '../../../config.php';
 session_start();
 if(isset($_GET['updatid'])){
    $idpost = $_GET['updatid'];
 }
if (isset($_POST['updat'])){
    $title = $_POST['title'];
    $article = $_POST['article'];
    $imgname = $_POST['imgname'];
    $topic = $_POST['topic'];
    $query = "UPDATE `articltb` SET Title ='$title' , article = '$article' , imgname = '$imgname' , topic = '$topic' WHERE id = '$idpost'";
    $res = mysqli_query($conn , $query);
}
?>