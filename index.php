<?php
include 'config.php';
session_start();

//  
// error_reporting(0);

// if (isset($_SESSION['firstname'])) {
//     header("Location: welcome.php");
// }

//$email = validate($_POST('email'))
//$password = validate($_POST('password'))

if (isset($_POST))
if (isset($_POST['submit'])) { 
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM usertb WHERE email='$email' AND code='$password'";
	$result = mysqli_query($conn, $sql);
    // $rs = mysqli_num_rows($result);
	if ($result) { // Check if the query was successful
        if (mysqli_num_rows($result) > 0) { // Check if any rows were returned
            $user = mysqli_fetch_assoc($result); // Fetch the first row as an associative array
            echo "User ID: " . $user['id'];
            // You can now store user info in the session
            $_SESSION['id'] = $user['id'];
            header("Location: admin/admin/topics/index.php"); // Redirect on success
            exit();
        } else {
            header("Location: index.php"); // Redirect on success
            echo "<script>alert('Invalid email or password.')</script>";
        }
    } else {
        // Query failed, output error for debugging
        echo "Error: " . mysqli_error($conn);
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

        <div class="controls">
            <span class="vid-btn active" data-src="images/vd.mp4"></span>
            <span class="vid-btn" data-src="images/vb.mp4"></span>
            <span class="vid-btn" data-src="images/vc.mp4"></span>
            <span class="vid-btn" data-src="images/vid-1.mp4"></span>
            <span class="vid-btn" data-src="images/ve.mp4"></span>
        </div>

        <div class="video-container">
            <video src="images/vd.mp4" id="video-slider" loop autoplay muted></video>
        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->

    <!-- <section class="book" id="book">

        <h1 class="heading">
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>
            <span>n</span>
            <span>o</span>
            <span>w</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>

        </div>

    </section> -->

    <!-- book section ends -->

    <!-- articles section starts  -->

    <section class="articles" id="articles">

        <h1 class="heading">
            <span>a</span>
            <span>r</span>
            <span>t</span>
            <span>i</span>
            <span>c</span>
            <span>l</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container" method="POST">

<?php
	$sql = "SELECT * FROM `articltb`";
	$result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($procard = mysqli_fetch_assoc($result)){
?>    
        <div class="box" action="" method="POST">
            <img src="admin/admin/posts/image/<?php echo $procard['imgname']; ?>" height = "50" alt="">
            <div class="content">
                <h3><?php echo $procard['Title'] ?></h3>
                <p><?php echo $procard['Writer'] ?></p>
                <a href="thebody.php" class="btn">See more</a>
            </div> 
        </div>  
<?php
        };
    };
?>

            <!-- <div class="box">
                <img src="images/b.webp" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> hawaii </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/c.webp" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> sydney </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/d.webp" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> paris </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/e.webp" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> tokyo </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/f.webp" alt="">
                <div class="content">
                    <h3> <i class="fas fa-map-marker-alt"></i> eypt </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
                    <div class="stars">
                     <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $90.00 <span>$120.00</span> </div>
                    <a href="#" class="btn">book now</a>
           </div> -->
            </div>
        </div>

    </section>

    <!-- articles section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>c</span>
            <span>a</span>
            <span>t</span>
            <span>e</span>
            <span>g</span>
            <span>o</span>
            <span>r</span>
            <span>i</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-solid fa-code"></i>
                <h3>Memoires ou theses diriges et soutenuse</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </div>
            <div class="box">
                <i class="fas fa-solid fa-laptop-code"></i>
                <h3>comunications aux conferences scientifique</h3>
                <p>The objective of a scientific congress is the exchange of information between researchers from all over the world, therefore of different mother tongues.</p>
            </div>
            
            <div class="box">
                <i class="fas fa-regular fa-microchip"></i>
                <h3>les projets</h3>
                <p>Résultats de traduction Project management1 or project management2 is the set of activities aimed at organizing the smooth running of a project and achieving its objectives in due time according to the objectives set.</p>
            </div>
            <div class="box">
                <i class="fas fa-regular fa-qrcode"></i>
                <h3>work shop</h3>
                <p>Used by companies, but also increasingly by schools, what does the word workshop really define? Who is it for and what is it for? Diplomeo explains everything from A to Z!</p>
            </div>
            <div class="box">
                <i class="fas fa-regular fa-cube"></i>
                <h3>Scientific articles</h3>
                <p>A scientific article presents research findings written by researchers and scientists.  They are generally considered primary sources and are written for other researchers. The most recent articles will contain the most recent work in the field, with references to previously published works in the field of study. </p>
            </div>
            <div class="box">
            <a href="phd.php">
                <i class="fas fa-regular fa-keyboard"></i>
                <h3>PhD research</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
            </a>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>t</span>
            <span>o</span>
            <span>o</span>
            <span>l</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/h.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/i.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/j.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/k.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/l.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/m.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/n.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="tools1.php" class="btn">see more</a>
                </div>
            </div>
            <div class="box">
                <img src="images/o.webp" alt="">
                <div class="content">
                    <h3>PROFETIONELL TOOLES</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, tenetur.</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>s</span>
            <span>e</span>
            <span>a</span>
            <span>r</span>
            <span>c</span>
            <span>h</span>
            <span>e</span>
            <span>r</span>
            <span>s</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/benzoix201108634.jpg" alt="">
                        <h3>Mohamed</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/images (1).jfif" alt="">
                        <h3>Abd el kader</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/images.jfif" alt="">
                        <h3>Youcef</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.png" alt="">
                        <h3>Sliman</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa adipisci quisquam sunt nesciunt fugiat odit minus illum asperiores dolorum enim sint quod ipsam distinctio molestias consectetur ducimus beatae, reprehenderit exercitationem!</p>
                        <div class="stars">
                            <!-- <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i> -->
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/133-1337353_work-with-us-work-with-us-illustration-hd.png" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>

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

