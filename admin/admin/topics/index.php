<?php
include '../../../config.php';
session_start();

// error_reporting(0);
// $_SESSION['id']=$idd;
if(isset($_SESSION['id'])){
  $idd = $_SESSION['id'];
}

if (isset($_POST['updat'])) { 
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $adres = $_POST['adres'];

  $idd = $_SESSION['id'];
  
  // $sql = "SELECT * FROM usertb WHERE email='$email' AND phone='$phone'";
  mysqli_query($conn, "UPDATE `usertb` SET `firstname`='$firstname' , `lastname`='$lastname' , `email`='$email' , `adres`='$adres' , `phone`='$phone'  WHERE `id`='$idd' ");
  
}

$result = mysqli_query($conn,"SELECT * FROM `usertb` WHERE `id`='$idd'" );
$rd = mysqli_fetch_assoc($result) ;
$firstname = $rd['firstname'];
$lastname = $rd['lastname'];
$adres = $rd['adres'];
$email = $rd['email'];
$phone = $rd['phone'];

// if (isset($_POST['updat'])) { 
//     $firstname1 = $_POST['firstname1'];
//     $lastname1 = $_POST['lastname1'];
//     $email1 = $_POST['email1'];
//     $phone1 = $_POST['phone1'];
//     $adres1 = $_POST['adres1'];

    
//       $idd = $_SESSION['id'];
    
//     // $sql = "SELECT * FROM usertb WHERE email='$email' AND phone='$phone'";
//     $sql = "UPDATE `usertb` SET `firstname`='$firstname1' , `lastname`='$lastname1' , `email`='$email1' , `adres`='$adres1' , `phone`='$phone1'  WHERE `id`='$idd' ";
//     mysqli_query($conn, $sql);
    
// }


// echo $_SESSION['successMsg'];

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
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <!-- <div class="left-sidebar">
                <ul>
                    <li><a href="../posts/index.html">Manage Posts</a></li>
                    <li><a href="../users/index.html">Manage Users</a></li>
                    <li><a href="index.html">Manage Topics</a></li>
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
                    <a href="index.php">
                      <i class='bx bx-grid-alt'></i>
                      <span class="links_name">Hi Mr <?php echo $firstname ?></span>
                    </a>
                     <span class="tooltip">Hi Mr <?php echo $firstname ?></span>
                  </li>
                  <li>
                   <a href="../users/index.php">
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
                    <!-- <div class="button-group">
                        <a href="create.html" class="btn btn-big">Add Topic</a>
                        <a href="index.html" class="btn btn-big">Manage Topics</a>
                    </div> -->


                    <div class="content">

                        <h2 class="page-title">My profilo</h2>

                        <!-- <table>
                            <thead>
                                <th>SN</th>
                                <th>Name</th>
                                <th colspan="2">Action</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Poetry</td>
                                    <td><a href="#" class="edit">edit</a></td>
                                    <td><a href="#" class="delete">delete</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Life Lessons</td>
                                    <td><a href="#" class="edit">edit</a></td>
                                    <td><a href="#" class="delete">delete</a></td>
                                </tr>
                            </tbody>
                        </table> -->
                        <div class="container rounded bg-white mt-5" method="po$_POST">
                            <div class="row" method="po$_POST">
                                <div class="col-md-4 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="https://i.imgur.com/0eg0aG0.jpg" width="90"><span class="font-weight-bold"><?php echo $firstname.' '.$lastname ?></span><span class="text-black-50"><?php echo $email ?></span><span>Algeria</span></div>
                                </div>
                                <div class="col-md-8" method="po$_POST">

 
 
                                    <div class="p-3 py-5" method="po$_POST">
                                        <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                                                <h6>Back to home</h6>
                                            </div>
                                            <h6 class="text-right">Edit Profile</h6>
                                        </div> -->
                                        <div class="row mt-2">
                                            <div class="col-md-6"><input type="text" class="form-control" name="firstname" placeholder="first name" value="<?php echo $firstname ?>"></div>
                                            <div class="col-md-6"><input type="text" class="form-control" name="lastname" placeholder="last name" value="<?php echo $lastname ?>"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"><input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $email ?>"></div>
                                            <div class="col-md-6"><input type="text" class="form-control" name="phone" placeholder="Phone number" value="<?php echo $phone ?>"></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"><input type="text" class="form-control" name="adres" placeholder="address" value="<?php echo $adres ?>"></div>
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Country" value=""></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="" value=""></div>
                                            <div class="col-md-6"><input type="text" class="form-control" placeholder="Account Number" value=""></div>
                                        </div>
                                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button" name = "updat" href="">Save Profile</button></div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        
                    </div>

                </div>
            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



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