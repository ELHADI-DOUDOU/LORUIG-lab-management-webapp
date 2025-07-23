<?php
include 'config.php';
session_start();

// Disable error display in production (better handled via logs)
error_reporting(0);

if (isset($_SESSION['firstname'])) {
    header("Location: welcome.php");
    exit(); // Always use exit after header to stop script execution
}

if (isset($_POST['submit'])) { 
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Use prepared statements to avoid SQL injection
    $sql = "SELECT * FROM usertb WHERE email = ? AND code = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['successMsg'] = "welcome";

        header("Location: admin/admin/topics/index.php");
        exit(); // Ensure script stops after redirection
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.');</script>";
        header("Location: index.php");
        exit();
    }
}
?>

<style>
*{
  font-family: 'Nunito', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  text-transform: capitalize;
  outline: none; border:none;
  text-decoration: none;
  transition: all .2s linear;
}
.phd img{
  position: absolute;
  top:0;
  left: 0;
  z-index: -1;
  height: 100%;
  width:100%;
  object-fit: cover;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire de Recherche Informatique Univ Ghardaia</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="phd" id="phd">

        <div class="content">
            <h3 style="letter-spacing:50px">LRIUG</h3>
            <p>Laboratoire de Recherche Informatique Univ Ghardaia</p>
            <a href="#" class="btn">discover more</a>
        </div>

        <div class="video-container">
         <img src="images\vid-2.mp4" alt="">
        </div>

    </section>
 
    <?php include 'footer.php'; ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
