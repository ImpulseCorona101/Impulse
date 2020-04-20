<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>Current Statistics</title>

    <style>
        .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Impulse</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                       <a class="nav-link" href="../index.php"> Home <span class=" sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                       <a class="nav-link" href="CurrentStats.php">Covid-19 Status <span class=" sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                       <a class="nav-link" href="../Token_System/user/shop_list.php"> Slot Booking <span class=" sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item ">
                       <a class="nav-link" href="../AgroCraft/index.html">AgroCraft <span class=" sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="../User_Pages/About.php">About Application</a>
                  </li>
                  <li class="nav-item">
                       <a class="nav-link" href="../Token_System/user/Contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">

                  </li>
             </ul>
        </div>
        </div>
        <?php
        include("../Token_System/Includes/db.php");
        $name = "";
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
             echo "<div class='text login' style='color: white;'>>Hello  $name</div>";
        } else {

             echo "<a href='../Token_System/user/user_signin.php' ><div class='text login' style='color: white;'>Login</div></a>";
        }
        ?>


        </div>
        <div class="dropdown">
             <button onclick="myFunction()" class="dropbtn fas fa-bars"></button>
             <div id="myDropdown" class="dropdown-content">
                  <?php

                  if (isset($_SESSION['phonenumber'])) {
                       echo " <a href='../Token_System/user/profile.php'>Profile</a>";

                       echo "<a href='../Token_System/user/user_signin.php'>Logout</a>";
                  } else {

                       echo "<a href='../Token_System/user/user_signin.php'>Login</a>";
                  }
                  ?>

                  <div class="hide">
                       <a href="../index.php">Home</a>
                       <a href="CurrentStats.php">Covid-19 Status</a>
                       <a href="../Token_System/user/shop_list.php">Book Your Slot</a>
                       <a href="../AgroCraft/index.html">Agrocraft</a>
                       <a href="../User_Pages/About.php">About Application</a>
                       <a href="../Token_System/user/Contact.php">Contact Us</a>
                       
                       
                       <div>

                       </div>
                  </div>
             </div>
        </div>
   </nav>
    <br>


    <div class=" row ">
        <div class="col-8 ">
            <h2 class="text-right mt-3 font-weight-bolder ">Coronavirus Current Stats Statewise</h2>
        </div>
        <div class="col ">
            <img src="Virus.png" class="img-fluid " alt="Responsive image " style="width: 100px; height:100px; ">
        </div>
    </div>


    <div class="container">

        <h2 class="text-center font-weight-bold" id="heading">Current India Situation</h2>
        <br>
        <div class="col-md-4 mx-auto ">
            <div class="card text-center">
                <div class="col align-self-center">
                    <div class="row border border-light  justify-content-center p-2 ">
                        <h5 class="font-weight-bold text-center" id="cases">
                            Total Cases : 0
                        </h5>
                    </div>
                    <div class="row border border-light justify-content-center p-2" >
                        <h5 class="font-weight-bold" id = "cured">
                            Total Cured : 0
                        </h5>
                    </div>
                    <div class="row border border-light justify-content-center p-2" >
                        <h5 class="font-weight-bold" id = "death">
                            Total Death : 0
                        </h5>
                    </div>
                </div>
            </div>
        </div>


        <br /><br />

        <h3 class="font-weight-bold">Enter State :</h3>
        <form action="" method="POST" class="myform">
            <div class="form-group">
                <select class="form-control custom-select" id="state" name="state" required>
                    <option value="Andhra Pradesh"> Andhra Pradesh </option>
                    <option value="Arunachal Pradesh">
                        Arunachal Pradesh
                    </option>
                    <option value="Assam"> Assam </option>
                    <option value="Bihar"> Bihar </option>
                    <option value="Chandigarh"> Chandigarh </option>
                    <option value="Chhattisgarh"> Chhattisgarh </option>
                    <option value="Dadra & Nagar Haveli">
                        Dadra & Nagar Haveli
                    </option>
                    <option value="Daman & Diu"> Daman & Diu </option>
                    <option value="Delhi"> Delhi </option>
                    <option value="Goa"> Goa </option>
                    <option value="Gujarat"> Gujarat </option>
                    <option value="Haryana"> Haryana </option>
                    <option value="Himachal Pradesh"> Himachal Pradesh </option>
                    <option value="Jammu & Kashmir"> Jammu & Kashmir </option>
                    <option value="Jharkhand"> Jharkhand </option>
                    <option value="Karnataka"> Karnataka </option>
                    <option value="Kerala"> Kerala </option>
                    <option value="Madhya Pradesh"> Madhya Pradesh </option>
                    <option value="Maharashtra"> Maharashtra </option>
                    <option value="Manipur"> Manipur </option>
                    <option value="Meghalaya"> Meghalaya </option>
                    <option value="Mizoram"> Mizoram </option>
                    <option value="Nagaland"> Nagaland </option>
                    <option value="Orissa"> Orissa </option>
                    <option value="Pondicherry"> Pondicherry </option>
                    <option value="Punjab"> Punjab </option>
                    <option value="Rajasthan"> Rajasthan </option>
                    <option value="Sikkim"> Sikkim </option>
                    <option value="Tamil Nadu"> Tamil Nadu </option>
                    <option value="Tripura"> Tripura </option>
                    <option value="Uttar Pradesh"> Uttar Pradesh </option>
                    <option value="Uttaranchal"> Uttaranchal </option>
                    <option value="West Bengal"> West Bengal </option>
                </select>
            </div>
            <br /><br />
            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-lg" name="search">
                    Search
                </button>
            </div>
        </form>
        <br /><br />

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous ">
    </script>
        <script src="https://code.jquery.com/jquery-3.5.0.min.js" crossorigin="anonymous"></script>

    <script src="TrackerJS.js"></script>
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
    <style>
          .hide{
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
            right:20px;
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
        @media only screen and (min-device-width:310px) and (max-device-width:460px) {
            .hide{
                display: block;
            }
    </style>
</body>

</html>