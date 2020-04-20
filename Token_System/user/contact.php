<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impulse - Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

</head>
<style>
    .dropbtn {


color: #343a40;
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
.hide{
    display: none;
}
    .jumbotron {
        background: url(bg.png) fixed center no-repeat;
        background-size: cover;
    }
    
    a,
    a:focus,
    a:active {
        text-decoration: none;
        color: white;
    }
    
    a:hover {
        text-decoration: none;
        color: goldenrod;
    }
    
    @media only screen and (min-width: 320px) and (max-width:500px) {
        .main {
            margin-top: 20px;
        }
        .main:first-child {
            margin-top: -5%;
        }
        .conter {
            margin-bottom: -12%;
        }
        .hide{
            display: block;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="">Impulse</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                       <a class="nav-link" href="../../index.php">Home <span class=" sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                       <a class="nav-link" href="../../Coronavirus/CurrentStats.php">Covid-19 Status <span class=" sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                       <a class="nav-link" href="shop_list.php"> Slot Booking <span class=" sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                       <a class="nav-link" href="../../AgroCraft/index.html">AgroCraft <span class=" sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="../../User_Pages/About.php">About Application</a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="Contact.html">Contact Us</a>
                  </li>
                  <li class="nav-item">

                  </li>

             </ul>
             <div class="p-2">
                  <div class="">
                       <a> <i class="fa fa-user" style="font-size:30px; color:white ;margin-top:2px;"></i></a>
                       <span id="" style="color:green"></span>
                  </div>


             </div>
             <?php
             include("../Includes/db.php");
             $name = null;
             if (isset($_SESSION['phonenumber']) && (isset($_SESSION['occupation']) == "Shopkeeper")) {
                  $phone = $_SESSION['phonenumber'];
                  $name_query = "select * from shopkeeper where phone=$phone ";
                  $run = mysqli_query($con, $name_query);
                  while ($row = mysqli_fetch_array($run)) {
                       $name = $row['name'];
                  }
                  echo "<div class='text login' style='color: white;'>Hello  $name</div>";
             } else if (isset($_SESSION['phonenumber']) && (isset($_SESSION['occupation']) == "visitor")) {
                  $phone = $_SESSION['phonenumber'];
                  $name_query = "select * from consumer where phone=$phone ";
                  $run = mysqli_query($con, $name_query);
                  while ($row = mysqli_fetch_array($run)) {
                       $name = $row['name'];
                  }
                  echo "<div class='text login' style='color: white;'>>Hello $name</div>";
             } else {

                  echo "<a href='user_signin.php' ><div class='text login' style='color: white;'>Login</div></a>";
             }
             ?>
        </div>
        <div class="dropdown">
             <button onclick="myFunction()" class="dropbtn fas fa-bars"></button>
             <div id="myDropdown" class="dropdown-content">
                  <?php
                  if (isset($_SESSION['phonenumber'])) {
                       echo " <a href='profile.php'>Profile</a>";

                       echo "<a href='user_signin.php'>Logout</a>";
                  } else {

                       echo "<a href='user_signin.php'>Login</a>";
                  }
                  ?>
                   <div class="hide">
                     <a href="../../index.php">Home</a>
                     <a href="../../Coronavirus/CurrentStats.php">Covid-19 Status</a>
                     <a href="shop_list.php">Book Your Slot</a>
                     <a href="../../AgroCraft/index.html">Agrocraft</a>
                     <a href="Contact.html">Contact Us</a>
                     <div>

             </div>
        </div>
        </div>

   </nav>
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
    <div class="container">
        <img src="../../Images/contact2.jpg" class="img-responsive mx-auto d-block mb-6" alt="Responsive image" style="
        max-width: 40%;  
        max-height: 0.3%
        ; ">
        <div class="container ">
            <form action="/contact" method="POST">
                <div class=" text-center">
                    <h1 style="letter-spacing: 1px;word-spacing: 2px; ">CONTACT US </h1>
                </div>
                <div class="container bg-light  ">
                    <div class="text-center  ">
                        <h3 style="letter-spacing: 1px;word-spacing: 2px; padding-top: 30px;">HOW CAN WE MAKE THIS PAGE BETTER ? </h3>
                    </div>
                    <div class="row ">
                        <div class="col-sm-1 col-md-6 ">
                            <div class="input-group mt-5 mt-5 ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-dark text-white " id="inputGroup-sizing-lg ">First Name
                                </span>
                                </div>
                                <input type="text " class="form-control " maxlength="15" name="firstname" aria-label="Large " aria-describedby="inputGroup-sizing-sm " required>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-6 ">
                            <div class="input-group mt-5 ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-dark text-white " id="inputGroup-sizing-lg ">Last
                                    Name</span>
                                </div>
                                <input type="text" class="form-control " maxlength="15" name="lastname" aria-label="Large " aria-describedby="inputGroup-sizing-sm " required>
                            </div>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-sm-1 col-md-6 ">
                            <div class="input-group mt-5 ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-dark text-white " id="inputGroup-sizing-lg "><i
                                        class="far fa-envelope ml-2 mr-2 "></i>Email </span>
                                </div>
                                <input type="email" class="form-control " maxlength="25" name="email" aria-label="Large " aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>
                        <div class="col-sm-1 col-md-6 ">
                            <div class="input-group mt-5 ">
                                <div class="input-group-prepend ">
                                    <span class="input-group-text bg-dark text-white " id="inputGroup-sizing-lg "><i
                                        class="fas fa-phone-alt ml-2 mr-2 "></i>Phone</span>
                                </div>
                                <input type="tel" class="form-control " name="phone" aria-label="Large" pattern="\d{10}$" aria-describedby="inputGroup-sizing-sm ">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col ">

                            <div class="form-group ">
                                <label for="comment " class="bg-dark text-white mt-5 p-2 ">Description</label>
                                <textarea class="form-control mb-2" maxlength="100" name="description" rows="5 " id="comment " required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit " class="btn btn-primary mx-auto d-block btn-lg ">Submit Your Feedback !</button>
                    <br>
                </div>
            </form>
        </div>
        <div class="container bg-dark text-white .jumbotron">
            <div class=" text-center mt-5 ">
                <br>
                <h3 style="margin-top: 10px;"> This website was created by </h3>
            </div>
            <br>
            <br>

            <div class="row d-flex align-items-center justify-content-center text-center align-items-center">

                <div class="col main conter  p-0.5 ">
                    <h5>CHHADVA ANSH MITESH</h5>

                    <div class="text-center">
                        <a href="mailto:anshmiteshchhadva@gmail.com"><img src="https://img.icons8.com/color/30/000000/gmail.png" /> </a>
                        <a href="https://www.linkedin.com/in/ansh-chhadva-ab3902183/"> <img src="https://img.icons8.com/color/28/000000/linkedin.png" />
                        </a>
                        <a href="https://github.com/ansh0812"> <img src="https://img.icons8.com/material-sharp/30/000000/github.png" /> </a>


                    </div>

                </div>
                <div class="col  main p-0.5">
                    <h5> OMKAR SUHAS BHABAL
                    </h5>
                    <div class="text-center">
                        <a href="mailto:bhabalomkar421@gmail.com"><img src="https://img.icons8.com/color/30/000000/gmail.png" /> </a>
                        <a href="https://www.linkedin.com/in/omkar-bhabal-620b56192/"> <img src="https://img.icons8.com/color/28/000000/linkedin.png" /> </a>
                        <a href="https://github.com/bhabalomkar421"> <img src="https://img.icons8.com/material-sharp/30/000000/github.png" /></a>

                    </div>

                </div>


                <div class="col  main  p-0.5">
                    <h5> GUPTA ABHISHEK MANILAL</h5>
                    <div class="text-center">
                        <a href="mailto:abhig0209@gmail.com"><img src="https://img.icons8.com/color/30/000000/gmail.png" /> </a>
                        <a href="https://www.linkedin.com/in/abhishek-gupta-a745221a0/"> <img src="https://img.icons8.com/color/28/000000/linkedin.png" />



                            <a href="https://github.com/Elysian01"> <img src="https://img.icons8.com/material-sharp/30/000000/github.png" /></a><br>
                    </div>

                </div>
                <div class="col  main  p-0.5">
                    <h5> ABDUL AZIM </h5>
                    <div class="text-center">
                        <a href="mailto:abdulazim0402@gmail.com"><img src="https://img.icons8.com/color/30/000000/gmail.png" /> </a>
                        <a href="https://www.linkedin.com/in/abdul-azim-08087019b/"> <img src="https://img.icons8.com/color/28/000000/linkedin.png" />



                            <a href="https://github.com/azim2429"> <img src="https://img.icons8.com/material-sharp/30/000000/github.png" /></a><br>
                    </div>

                </div>


            </div>
            <br>
            <br>
        </div>
        </form>

</body>

</html>