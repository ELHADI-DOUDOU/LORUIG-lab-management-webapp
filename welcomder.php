
<?php 
session_start();
// if (!isset($_SESSION['firstname'])) {
//     header("Location: index.php");
// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>the page of custemers</title>

        <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="travelingstyle.css">
</head>
<body>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-hiking"></i> travel. </a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>
        <a href="#home">home</a>
        <a href="#profil">profil</a>
        <a href="#book">book</a>
        <a href="#tab-gist">my travels</a>
        <a href="#footer">footer</a>
    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="fas fa-shopping-cart"></a>
        <div id="search-btn" class="fas fa-search"></div>
    </div>

</header>

<!-- header section ends -->    


<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(home-bg-1.jpg) no-repeat;">
                    <div class="content">
                        <span>Hello</span>
                        <h3>Rostom </h3>
                    
                        <a href="#book" class="btn">book a trip</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>




<section class="profil" id="profil">
    
    <h1 class="heading">
        <span>p</span>
        <span>r</span>
        <span>o</span>
        <span>f</span>
        <span>i</span>
        <span>l</span>
    </h1>


    <div class="wrapper">
       <div class="left">
        <img src="moh.jpg" alt="user" > 
       </div>
       <div class="right">
        <div class="info">
            <h3>info</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>first name</h4>
                    <p>mohamed</p>
                 </div>
                 <div class="data">
                   <h4>midel name</h4>
                    <p>abd elhadi</p>
                </div>
                <div class="data">
                   <h4>last name</h4>
                   <p>doudou</p>
                </div>
            </div>
        </div>

        <div class="berthday">  
            <div class="berthday_data">
                 <div class="data">
                    <h4>berth day</h4>
                    <p>18/09/1999</p>
                 </div>
                 <div class="data">
                   <h4>job</h4>
                   <p>univ student</p>
                </div>
                <div class="data">
                   <h4>mager</h4>
                   <p>computer since</p>
                </div>
            </div>
        </div>
      
       <div class="projects">
            <h3>contacts</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>phone number</h4>
                    <p>+213540361011</p>
                 </div>
                 <div class="data">
                   <h4>email adrese</h4>
                    <p>mohamed.elhadi1438gmail.com</p>
              </div>
            </div>
        </div>
      
        <div class="social_media">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
      </div>
       </div>
    </div>
 
</section>




<section class="book" id="book">

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
            <img src="book-img.svg" alt="" >
        </div>

        <form action="" autocomplete="off" onsubmit="onFormSubmit()" class="form-group">
            <div class="inputBox">
                <h3 for="whereto">where to</h3>
                <input type="text" placeholder="place name" name="whereto" id="whereto" class="form-control">
            </div>
            <div class="inputBox">
                <h3 for="howmany">how many</h3> 
                <input type="number" placeholder="number of guests" name="howmany" id="howmany" class="form-control">
            </div>

            <div class="inputBox">
                <h3 for="arrivals">arrivals</h3>
                <input type="date" name="arrivals" id="arrivals" class="form-control">
            </div>
            <div class="inputBox">
                <h3 for="leaving">leaving</h3>
                <input type="date" name="leaving" id="leaving" class="form-control">
            </div>

            <input href="#tab-gist" type="submit" class="btn" value="book now">
        </form>
    </div>

</section>




<section class="tab-gist" id="tab-gist">


    <h1 class="heading">
        <span>m</span>
        <span>y</span>
        <span  class="space"></span>
        <span>t</span>
        <span>r</span>
        <span>a</span>
        <span>v</span>
        <span>e</span>
        <span>l</span>
        <span>s</span>
    </h1>


    <div class="bg-primary p-2">
        <table class="list" id="employeeList">
            <thead>
                <tr>
                    <th>destination</th>
                    <th>number of people</th>
                    <th>arrivals1</th>
                    <th>leaving1</th>
                    <th>the salery</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-light">

            </tbody>
        </table>
    </div>

</section> 


<!-- footer section  -->

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> mohamed elhadi and rostom </span> | all rights reserved! </h1>

</section>
<script>
var selectedRow = null;
    function onFormSubmit(e){
        event.preventDefault();
        var formData = readFormData();
        if(selectedRow === null){
            insertNewRecord(formData);
        }
        else{
            updateRecord(formData)
        }
        resetForm();
        }
// Read operation using this function
    function readFormData(){
        var formData = {};
        formData["whereto"] = document.getElementById("whereto").value;
        formData["howmany"] = document.getElementById("howmany").value;
        formData["arrivals"] = document.getElementById("arrivals").value;
        formData["leaving"] = document.getElementById("leaving").value;
        return formData;
    }

// Create operation
    function insertNewRecord(data){
        var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
        var newRow = table.insertRow(table.length);
        var cell1 = newRow.insertCell(0);
            cell1.innerHTML = data.whereto;
        var cell2 = newRow.insertCell(1);
            cell2.innerHTML = data.howmany;
        var cell3 = newRow.insertCell(2);
            cell3.innerHTML = data.arrivals;
        var cell4 = newRow.insertCell(3);
            cell4.innerHTML = data.leaving;
        var cell4 = newRow.insertCell(4);
            cell4.innerHTML = (data.howmany*100);            
        var cell5 = newRow.insertCell(5);
            cell5.innerHTML =
   `<a href="#book" onClick='onEdit(this)' class='btn-sm btn-success'><img src="pencil.png" alt="" width="25px" height="25px"></a>
    <a  onClick='onDelete(this)' class='btn-sm btn-danger'><img src="trash.png" alt="" width="30px" height="30px"></a>`;
    }

// To Reset the data of fill input
function resetForm(){
    document.getElementById('whereto').value = '';
    document.getElementById('howmany').value = '';
    document.getElementById('arrivals').value = '';
    document.getElementById('leaving').value = '';
    selectedRow = null;
}

// For Edit operation
function onEdit(td){
    selectedRow = td.parentElement.parentElement;
    document.getElementById('whereto').value = selectedRow.cells[0].innerHTML;
    document.getElementById('howmany').value = selectedRow.cells[1].innerHTML;
    document.getElementById('arrivals').value = selectedRow.cells[2].innerHTML;
    document.getElementById('leaving').value = selectedRow.cells[3].innerHTML;
}
function updateRecord(formData){
    selectedRow.cells[0].innerHTML = formData.whereto;
    selectedRow.cells[1].innerHTML = formData.howmany;
    selectedRow.cells[2].innerHTML = formData.arrivals;
    selectedRow.cells[3].innerHTML = formData.leaving;
}
function onDelete(td){
    if(confirm('Are you sure you want to delete this record?')){
        row = td.parentElement.parentElement;
        document.getElementById('employeeList').deleteRow(row.rowIndex);
        resetForm();
    }    
}
</script>   

</body>
</html>