<?php 
include '../../../config.php';


session_start();

if(isset($_SESSION['id'])){
  $idd = $_SESSION['id'];
}
$result = mysqli_query($conn,"SELECT * FROM `usertb` WHERE `id`='$idd'" );
$rd = mysqli_fetch_assoc($result) ;
$firstname = $rd['firstname'];
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

        <title>Admin Section - Manage Users</title>
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
                   <a href="index.php">
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

                        <h2 class="page-title">Manage Users</h2>

                        <table>
                            <thead>
                                <th>SN</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th colspan="2">Action</th>
                            </thead>
                            
                            <?php 
                            include '../../../config.php';
                            	$query = "SELECT * FROM `usertb`";
                              $result = mysqli_query($conn, $query);
                              if($result){
                                while($row = mysqli_fetch_assoc($result)){
                                  $id = $row['id'];
                                  $firstname = $row['firstname'];
                                  $lastname	 = $row['lastname'];
                                  $email= $row['email'];
                                  $adres = $row['adres'];
                                  $phone = $row['phone'];	
                                  $code = $row['code'];
                                  echo '                                
                                      <tr>
                                      <td>'.$id.'</td>
                                      <td>'.$firstname.'</td>
                                      <td>'.$lastname	.'</td>
                                      <td>'.$email.'</td>
                                      <td>'.$adres.'</td>
                                      <td>'.$phone.'</td>
                                      <td>'.$code.'</td>
                                      <td>
                                      <button ><img src="../img/update.png" alt="" href = "updat.php" class = "text-light" width="30" height="30"><a href=""></a> </button>
                                      <button ><a href="delet.php?deletid='.$id.'"><img src="../img/delete.png" alt=""  class = "text-light" width="30" height="30" ></a></button>
                                      </td>
                                      </tr>';
                                }
                              }
                            ?>
                            <!-- <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Awa</td>
                                    <td>Admin</td>
                                    <td><a href="#" class="edit">edit</a></td>
                                    <td><a href="#" class="delete">delete</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Melvine</td>
                                    <td>Author</td>
                                    <td><a href="#" class="edit">edit</a></td>
                                    <td><a href="#" class="delete">delete</a></td>
                                </tr>
                            </tbody> -->
                        </table>

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