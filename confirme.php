<?php
include 'config.php';
// error_reporting(0);
session_start();
// $sql = "SELECT * FROM `usertb` WHERE id='$id'";
// $result = mysqli_query($conn, $sql);
if(isset($_SESSION['id'])){
    echo $_SESSION['id'];
  }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">
        
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../css/admin.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../css/bar.css">
    </head>

    <body>


    </body>

</html>