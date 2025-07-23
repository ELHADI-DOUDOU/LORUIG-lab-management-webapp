<?php 
include '../../../config.php';
// include '../../config.php';
// error_reporting(0);

 session_start();
 
if(isset($_SESSION['id'])){
  $idd = $_SESSION['id'];
}
$result = mysqli_query($conn,"SELECT * FROM `usertb` WHERE `id`='$idd'" );
$rd = mysqli_fetch_assoc($result) ;
$firstname = $rd['firstname'];

// if (isset($_SESSION['firstname'])) {
//     header("Location: index.php");
// }

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$adres = $_POST['adres'];
	// $type = $_POST['role'];

	$pool="0123456789abcdefghjklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$pool = str_shuffle($pool);
	$pool = substr($pool,0,8);

	$query = "INSERT INTO usertb (`firstname`,`lastname`,`email`,`adres`,`phone`,`code`) VALUES ('$firstname','$lastname','$email','$adres','$phone','$pool')";
    $result = mysqli_query($conn, $query);
    // if ($result){
    //   echo 'saved seccesefuly';
    // }
    // else {echo 'filed';
    // } 
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

        <title>Admin Section - Add User</title>
    </head>

    <body>
        <!-- <header>
            <div class="logo">
                <h1 class="logo-text"><span>Awa</span>Inspires</h1>
            </div>
            <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                        Awa Melvine
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <li><a href="#" class="logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </header> -->

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper" >

            <!-- Left Sidebar -->
            <!-- <div class="left-sidebar">
                <ul>
                    <li><a href="../posts/index.html">Manage Posts</a></li>
                    <li><a href="index.html">Manage Users</a></li>
                    <li><a href="../topics/index.html">Manage Topics</a></li>
                </ul>
            </div> -->
            <div class="sidebar">
                <div class="logo-details">
                  <i class='bx bxl-c-plus-plus icon'></i>
                    <div class="logo_name">LRIUG</div>
                    <i class='bx bx-menu' id="btn" ></i>
                </div>
                <ul class="nav-list">
                  <li>
                      <i class='bx bx-search' ></i>
                     <input type="text" placeholder="Search...">
                     <span class="tooltip">Search</span>
                  </li>
                  <li>
                    <a href="../topics/index.php">
                      <i class='bx bx-grid-alt'></i>
                      <span class="links_name">Hi Mr <?php echo $firstname ?></span>
                    </a>
                     <span class="tooltip">Hi Mr <?php echo $firstname ?></span>
                  </li>
                  <li>
                   <a href="create.php">
                     <i class='bx bx-user' ></i>
                     <span class="links_name">Users manager</span>
                   </a>
                   <span class="tooltip">Users manager</span>
                 </li>
                 <li>
                   <a href="../posts/create.php">
                     <i class='bx bx-chat' ></i>
                     <span class="links_name">Posts manager</span>
                   </a>
                   <span class="tooltip">Posts manager</span>
                 </li>
                 <li>
                   <a href="#">
                     <i class='bx bx-pie-chart-alt-2' ></i>
                     <span class="links_name">Analytics</span>
                   </a>
                   <span class="tooltip">Analytics</span>
                 </li>
                 <li>
                   <a href="#">
                     <i class='bx bx-folder' ></i>
                     <span class="links_name">File Manager</span>
                   </a>
                   <span class="tooltip">Files</span>
                 </li>
                 <!-- <li>
                   <a href="#">
                     <i class='bx bx-cart-alt' ></i>
                     <span class="links_name">Order</span>
                   </a>
                   <span class="tooltip">Order</span>
                 </li> -->
                 <li>
                   <a href="#">
                     <i class='bx bx-heart' ></i>
                     <span class="links_name">Saved</span>
                   </a>
                   <span class="tooltip">Saved</span>
                 </li>
                 <li>
                   <a href="#">
                     <i class='bx bx-cog' ></i>
                     <span class="links_name">Setting</span>
                   </a>
                   <span class="tooltip">Setting</span>
                 </li>
                 <li class="profile">
                     <div class="profile-details">
                       <!--<img src="profile.jpg" alt="profileImg">-->
                       <div class="name_job">
                         <div class="name">Moh elhadi</div>
                         <div class="job">Web designer</div>
                       </div>
                     </div>
                     <a href="../../../logout.php"><i class='bx bx-log-out' id="log_out" ></i></a>
                 </li>
                </ul>
            </div>
            <!-- // Left Sidebar -->


            <!-- Admin Content -->
            <div class="home-section">
                <div class="admin-content">
                    <div class="button-group">
                        <a href="create.php" class="btn btn-big">Add User</a>
                        <a href="index.php" class="btn btn-big">Manage Users</a>
                    </div>


                    <div class="content">

                        <h2 class="page-title">Add User</h2>

                        <form action="" method="POST">
                            <div>
                                <label>First name</label>
                                <input type="text" name="firstname"
                                    class="text-input">
                            </div>
                            <div>
                                <label>Last name</label>
                                <input type="text" name="lastname"
                                    class="text-input">
                            </div>
                            <div>
                                <label>Email</label>
                                <input type="email" name="email" class="text-input">
                            </div>
                            <!-- <div>
                                <label>Password</label>
                                <input type="password" name="password"
                                    class="text-input">
                            </div> -->
                            <div>
                                <label>Phone number</label>
                                <input type="text" name="phone"
                                    class="text-input">
                            </div>
                            <div>
                                <label>Home Address</label>
                                <input type="text" name="adres" class="text-input">
                            </div>
                            <div>
                                <label>Role</label>
                                <select name="role" class="text-input">
                                    <option value="Author">Chef</option>
                                    <!-- <option value="Admin">Member</option> -->
                                </select>
                            </div>

                            <div>
                                <button type="submit" name="submit" class="btn btn-big">Add User</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../js/scripts.js"></script>

        <script>
            let sidebar = document.querySelector(".sidebar");
            let closeBtn = document.querySelector("#btn");
            let searchBtn = document.querySelector(".bx-search");
          
            closeBtn.addEventListener("click", ()=>{
              sidebar.classList.toggle("open");
              menuBtnChange();//calling the function(optional)
            });
          
            searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
              sidebar.classList.toggle("open");
              menuBtnChange(); //calling the function(optional)
            });
          
            // following are the code to change sidebar button(optional)
            function menuBtnChange() {
            if(sidebar.classList.contains("open")){
              closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
            }else {
              closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
            }
            }
            </script>

    </body>

</html>