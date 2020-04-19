<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <a href="https://icons8.com/icon/83325/roman-soldier"></a>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <title>Impulse - Homepage</title>

     <style>
          .hide {
               display: none;
          }

          .dropbtn {
               background-color: #343a40;
               color: white;
               padding: 8px;
               font-size: 18px;
               border: none;
               border-radius: 10px;
               cursor: pointer;
               margin-left: 50px;
               margin-right: 30px;
          }

          .dropbtn:hover,
          .dropbtn:focus {
               background-color: #2a5cff;
          }

          .dropdown {
               position: relative;
               display: inline-block;
          }

          .dropdown-content {
               display: none;
               position: absolute;
               right: 20px;
               background-color: #f1f1f1;
               min-width: 160px;
               overflow: auto;
               border-radius: 10px;
               box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
               z-index: 1;
          }

          .dropdown-content a {
               color: black;
               padding: 12px 16px;
               text-decoration: none;
               display: block;
          }

          .dropdown a:hover {
               background-color: #2a5cff;
          }

          .show {
               display: block;
          }

          .form-actions {
               margin: 0;
               background-color: transparent;
               text-align: center;
          }

          .mobileContent {
               display: none;
          }

          @media only screen and (min-device-width:320px) and (max-device-width:480px) {
               .mobileContent {
                    display: inline;
               }

               .table-responsive {
                    display: none;
               }
          }





          /* For Navbar  */


          * {
               font-family: sans-serif;
          }

          .search {
               position: absolute;
               top: 25%;
               left: 9%;
          }

          .form-actions {
               margin: 0;
               background-color: transparent;
               text-align: center;
          }

          .mobileContent {
               display: none;
          }

          body {
               background-color: #f3f7f7;

          }

          .parent {
               font-family: sans-serif;
               width: 900px;
               left: 140px;
          }

          h3 {
               position: relative;
               margin-left: 125px;


          }

          .container-sm:hover {
               background-color: #dfdfdf;
               color: #2a5cff;

          }

          .status {
               position: absolute;
               bottom: 310px;
               left: 1100px;
               color: #A9A9A9;
               width: 400px;
               font-family: sans-serif;
          }

          label {
               color: #000;
          }

          .dropbtn {
               background-color: #343a40;
               color: white;
               padding: 8px;
               font-size: 18px;
               border: none;
               border-radius: 10px;
               cursor: pointer;
               margin-left: 50px;
               margin-right: 30px;
          }

          .dropbtn:hover,
          .dropbtn:focus {
               background-color: #2a5cff;
          }

          .dropdown {
               position: relative;
               display: inline-block;
          }

          .dropdown-content {
               display: none;
               position: absolute;
               right: 20px;
               background-color: #f1f1f1;
               min-width: 160px;
               overflow: auto;
               border-radius: 10px;
               box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
               z-index: 1;
          }

          .dropdown-content a {
               color: black;
               padding: 12px 16px;
               text-decoration: none;
               display: block;
          }

          .dropdown a:hover {
               background-color: #2a5cff;
          }

          .show {
               display: block;
          }

          .search {
               position: absolute;
               left: 575px;
          }

          form {
               outline: 0;
               float: left;
               -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
               box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
               -webkit-border-radius: 4px;
               border-radius: 4px;
          }

          form>.textbox {
               outline: 0;
               height: 50px;
               width: 350px;
               line-height: 42px;
               padding: 0 16px;
               background-color: rgba(255, 255, 255, 0.8);
               color: #212121;
               border: 0;
               float: left;
               -webkit-border-radius: 4px 0 0 4px;
               border-radius: 4px 0 0 4px;
          }

          form>.textbox:focus {
               outline: 0;
               background-color: #FFF;
          }

          form>.button {
               outline: 0;
               background: none;
               background-color: #2a5cff;
               float: left;
               height: 50px;
               width: 42px;
               text-align: center;
               line-height: 42px;
               border: 0;
               color: #2a5cff;
               font: normal normal normal 14px/1 FontAwesome;
               font-size: 16px;
               text-rendering: auto;
               text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
               -webkit-transition: background-color .4s ease;
               transition: background-color .4s ease;
               -webkit-border-radius: 0 4px 4px 0;
               border-radius: 0 4px 4px 0;
          }

          .shop {
               display: none;
          }

          select {
               outline: 0;
               height: 40px;
               width: 180px;
               margin-left: 80px;
               line-height: 42px;
               padding: 0 16px;
               background-color: rgba(255, 255, 255, 0.8);
               color: #212121;
               border-color: #2a5cff;
               float: left;
               -webkit-border-radius: 4px 0 0 4px;
               border-radius: 4px 0 0 4px;
          }

          form>.button:hover {
               background-color: #2a5cff;
               cursor: pointer;
               color: #fff;
          }

          .full {
               position: absolute;
               top: 250px;
               left: 180px;
          }



          @media only screen and (min-device-width:310px) and (max-device-width:460px) {
               .navbar {
                    width: 100%;
               }

               h3 {
                    right: 50px;
                    width: 300px;
                    top: 65px;
                    position: absolute;

               }

               .search {
                    position: absolute;
                    top: 120px;
                    left: 70px;
               }

               .mob {
                    position: relative;
                    right: 300px;
                    bottom: 60px;


               }

               .container-sm {

                    width: 320px;
               }

               .parent {

                    width: 100px;
               }

               form>.textbox {

                    width: 180px;
               }

               .shop {
                    display: block;
               }

               .status {
                    display: none;
               }

               select {

                    position: relative;
                    left: 150px;
                    bottom: 50px;
               }

               .shop {
                    width: 120px;
                    height: 50px;

               }

               .hide {
                    display: block;
               }
          }
     </style>
     <script>
          /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
          function myFunction() {
               document.getElementById("myDropdown").classList.toggle("show");
          }

          // Close the dropdown if the user clicks outside of it
          window.onclick = function(event) {
               if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                         var openDropdown = dropdowns[i];
                         if (openDropdown.classList.contains('show')) {
                              openDropdown.classList.remove('show');
                         }
                    }
               }
          }
     </script>
</head>

<body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">Impulse</a>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                         <a class="nav-link" href="index.php"> <span class=" sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                         <a class="nav-link" href="Coronavirus/CurrentStats.html">Covid-19 Status <span class=" sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                         <a class="nav-link" href="Token_System/user/shop_list.php"> Slot Booking <span class=" sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                         <a class="nav-link" href="AgroCraft/index.html">AgroCraft <span class=" sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">About Application</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="Token_System/user/Contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">

                    </li>
               </ul>
          </div>
          </div>
          <?php
          $con = mysqli_connect("localhost", "root", "", "impulse");

          if (mysqli_connect_errno()) {
               echo "Failed to connect to MySql " . mysqli_connect_error();
          }
          if (isset($_SESSION['phonenumber']) && (isset($_SESSION['occupation']) == "Shopkeeper")) {
               $phone = $_SESSION['phonenumber'];
               $name_query = "select * from shopkeeper where phone=$phone ";
               $run = mysqli_query($con, $name_query);
               $name = "";
               while ($row = mysqli_fetch_array($run)) {
                    $name = $row['name'];
               }
               echo "<div class='text login' style='color: white;'>Hello , $name</div>";
          } else if (isset($_SESSION['phonenumber']) && (isset($_SESSION['occupation']) == "visitor")) {
               $phone = $_SESSION['phonenumber'];
               $name_query = "select * from consumer where phone=$phone ";
               $run = mysqli_query($con, $name_query);
               while ($row = mysqli_fetch_array($run)) {
                    $visitor_name = $row['name'];
               }
               echo "<div class='text login' style='color: white;'>>Hello , $visitor_name</div>";
          } else {

               echo "<a href='Token_System/user/user_signin.php' ><div class='text login' style='color: white;'>Login</div></a>";
          }
          ?>


          </div>
          <div class="dropdown">
               <button onclick="myFunction()" class="dropbtn fas fa-bars"></button>
               <div id="myDropdown" class="dropdown-content">
                    <a href="Token_System/user/profile.html">Profile</a>
                    <a href="Token_System/user/user_signin.php">Login</a>
                    <div class="hide">
                         <a href="../../index.php">Home</a>
                         <a href="../../Coronavirus/CurrentStats.html">Covid-19 Status</a>
                         <a href="../../AgroCraft/index.html">Agrocraft</a>
                         <a href="Contact.html">Contact Us</a>
                         <div>

                         </div>
                    </div>
               </div>
          </div>
     </nav>










     <br>
     <div class="row">
          <div class="col-6">
               <img src="Images/Impulse.png" class="img-fluid float-right mx-0" alt="Responsive image" style="width: 150px; height:100px;">

          </div>
          <div class="col float-left">
               <h1 class="text-left mt-3 mx-0 font-weight-bolder">Impulse</h1>
          </div>
     </div>

     <br>

     <div class="card bg-gradient-info">
          <h4 class="text-center p-3 font-italic" style="color:#0099ff;">To insure good health eat lightly ,breath deeply , live moderately,cultivate cheerfulness , and maintain an interest in life.</h4>
     </div>

     </div>


     <div class="container">
          <br>


          <div class="table-responsive">
               <table cellspacing="1" cellpadding="25" class="table">
                    <thead>
                         <tr>
                              <th rowspan=3 class="float-right"><img src="Images/VirusImage.png" alt="3"></th>
                              <th colspan="3" class="text-center align-middle">
                                   <h2 class="font-weight-bold">Coronavirus Section </h2>
                              </th>
                         </tr>
                         <tr>
                              <td cellpadding="3">
                                   <h3 id="cases">Total Cases : 0</h3>
                              </td>
                              <td>
                                   <h3 id="cured">Total Cured : 0</h3>
                              </td>
                              <td>
                                   <h3 id="death">Total Death :0</h3>
                              </td>
                         </tr>
                    </thead>
               </table>
          </div>

          <div class="mobileContent">
               <br>
               <h2 class="text-center font-weight-bold">Coronavirus </h2>
               <br>
               <div class="card container" style="width: 18rem;">
                    <ul class="list-group list-group-flush items">
                         <li class="list-group-item text-center">
                              <h4 id="mcases">Total Cases : </h4>
                         </li>
                         <li class="list-group-item text-center" id="cured">
                              <h4 id="mcured">Total Cured : </h4>
                         </li>
                         <li class="list-group-item text-center" id="death">
                              <h4 id="mdeath">Total Death : </h4>
                         </li>
                    </ul>
               </div>
          </div>

          <br>
          <a href="Coronavirus/CurrentStats.html"><button type="submit" class="btn btn-primary btn-lg col-4 ml-5 p-2" type="submit">Current
                    Status</button></a>

          <a href="Coronavirus/Coronavirus.php"><button type="submit" class="btn btn-primary btn-lg float-right col-4 mr-5 p-2" type="submit">COVID-19
                    Detector</button></a>
     </div>

     <br><br>

     <div class="card text-center">
          <div class="card-header">
               Slot Booking for Grocery Store
          </div>
          <div class="card-body">
               <h1 class="card-title">Book Your Slot And Be Safe</h1>
               <h5 class="card-text ">Book your slot according to your on will and time,which helps in maintaining social distancing and prevent overcrowding.
               </h5>
               <br>
               <a href="Token_System/user/shop_list.php" class="btn btn-primary btn-lg">Book Now</a>
<<<<<<< HEAD

          </div>
=======
                
>>>>>>> 3c59bd5e24cfdb6795bd4a94c0bdcbd1af373d38
          <div class="card-footer text-muted">
               A step against Coronavirus Pandemic
          </div>
     </div>

     <br><br>
     <div class="card container">
          <h5 class="card-header text-center">Connecting Farmer and Buyer Across the Country</h5>
          <div class="card-body">
               <h2 class="card-title text-center">Gets Fresh Products Directly form the Farm</h2>
               <h5 class="card-text text-center">Buy Vegetables , Grains , Fruits ,etc Across the Country by Directly Contacting to the Farmer </h5>
               <br>
               <div class="form-actions">
                    <a href="AgroCraft/index.html" class="btn btn-primary btn-lg">Start Buying</a>
               </div>
          </div>
     </div>

     <br>
     <br>
     <br>
     </div>

     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
     </script>
     <script src="https://code.jquery.com/jquery-3.5.0.min.js" crossorigin="anonymous"></script>

     <script src="Javascript/Homepage.js"></script>
     <script type="text/javascript">
          function myFunction() {
               document.getElementById("myDropdown").classList.toggle("show");
          }

          // Close the dropdown if the user clicks outside of it
          window.onclick = function(event) {
               if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                         var openDropdown = dropdowns[i];
                         if (openDropdown.classList.contains('show')) {
                              openDropdown.classList.remove('show');
                         }
                    }
               }
          }
     </script>
</body>

</html>