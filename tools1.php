<?php
include 'config.php';
session_start();

//  
// error_reporting(0);

// if (isset($_SESSION['firstname'])) {
//     header("Location: welcome.php");
// }

if (isset($_POST['submit'])) { 
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM usertb WHERE email='$email' AND code='$password'";
	$result = mysqli_query($conn, $sql);
    // $rs = mysqli_num_rows($result);
	if ($result > 0) {
        if(mysqli_num_rows($result)>0){
            while ($row = mysqli_fetch_assoc($result)){
                $_SESSION['id'] = $row['id'];
            }
        }
		// $row = mysqli_fetch_assoc($result);
        // $userid =$row['id'];
        // $_SESSION['logid'] = $userid;
        // $id = $_POST['id'];
		$_SESSION['successMsg'] = "welcome";
		// header("Location: admin/admin/topics/index.php");
        header("Location: admin/admin/topics/index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
        header("Location: index.php");
	}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire de Recherche Informatique Univ Ghardaia</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

<?php include 'header.php' ?>

    <!-- login form container  -->
    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="" method="POST">
            <h3>login</h3>
            <input type="email" class="box" placeholder="enter your email" name="email">
            <input type="password" class="box" placeholder="enter your password" name="password">
            <button name="submit" class="btn">Login</button>
            <!-- <input type="submit" value="login now" class="btn" name="submit"> -->
        </form>

    </div>

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3 style="letter-spacing:50px">LRIUG</h3>
            <p>Laboratoire de Recherche Informatique Univ Ghardaia</p>
            <a href="#" class="btn">discover more</a>
        </div>

        
            <span class="active" data-src="images/vid-2.mp4"></span>

        <div class="video-container">
            <video src="images/vid-2.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>


    <!-- contact section ends -->

    <!-- the brand bg -->
    <?php include 'brand.php' ?>
    <!-- the brand end -->

    <!-- the footer bg -->
    <?php include 'footer.php' ?>
    <!-- the footer end -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="script.js"></script>

    <script src="JS/all.min.js.js"></script>

</body>

</html>

