<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>COVID-19 Detector</title>

    <style>
        .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
        }

        html {
            scroll-behavior: smooth;
        }
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

        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .ele {
                width: 100%;
            }

            .x {
                margin-left: 34%;
                color: #000;
            }

            .y {
                margin-left: 38.5%;
                color: #000;
            }

            .z {
                margin-left: 23%;
            }

            .a {
                margin-left: 27%;
            }

            .b {
                margin-left: 33%;
            }

            .c {
                margin-left: 28%;
            }

            .d {
                margin-left: 32%;
            }

            .e {
                margin-left: 2%;
            }
            .hide{
            	display: block;
            }
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
                         <a class="nav-link" href="Token_System/user/shop_list.php"> Slot Booking <span class=" sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                         <a class="nav-link" href="AgroCraft/index.html">AgroCraft <span class=" sr-only">(current)</span></a>
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

                         echo "<a href='../Token_System/user/logout.php'>Logout</a>";
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
            <h2 class="text-right mt-3 font-weight-bolder ">Coronavirus Probability Detector</h2>
        </div>
        <div class="col ">
            <img src="VirusImage.png" class="img-fluid " alt="Responsive image " style="width: 100px; height:100px; ">
        </div>
    </div>


    <br>

    <br>
    <form class="container" action="Coronavirus.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1" class="font-weight-bold">Enter Body Temperature : </label>
            <input type="number" name="temperature" class="form-control" id="exampleFormControlInput1" placeholder="In Fahrenheit (97°F) " required>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1" class="font-weight-bold">Age : </label>
            <input type="number" name="age" class="form-control" id="exampleFormControlInput1" placeholder="" required>
        </div>

        <div class="row ">
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Cough : </label>
                </div>

                <div class="form-check form-check-inline x">
                    <input class="form-check-input " type="radio" name="cough" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cough" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline ">
                    <label class="font-weight-bold">Cold : </label>
                </div>

                <div class="form-check form-check-inline y">
                    <input class="form-check-input" type="radio" name="cold" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="cold" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Sore Throat : </label>
                </div>

                <div class="form-check form-check-inline z">
                    <input class="form-check-input" type="radio" name="sore_throat" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sore_throat" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row  justify-content-center align-items-center">
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Body Pain : </label>
                </div>

                <div class="form-check form-check-inline a">
                    <input class="form-check-input" type="radio" name="body_pain" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="body_pain" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Fatigue : </label>
                </div>

                <div class="form-check form-check-inline b">
                    <input class="form-check-input" type="radio" name="fatigue" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fatigue" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele col-xl-4">
                <div class="form-check form-check-inline ">
                    <label class="font-weight-bold">Headache : </label>
                </div>

                <div class="form-check form-check-inline c">
                    <input class="form-check-input" type="radio" name="headache" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="headache" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>

        <br>
        <div class="row">
            <div class="col-12 ele justify-content-center mx-auto col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Diarrhea : </label>
                </div>

                <div class="form-check form-check-inline d">
                    <input class="form-check-input" type="radio" name="diarrhea" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="diarrhea" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
            <div class="col-12 ele justify-content-center mx-auto col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="form-check form-check-inline">
                    <label class="font-weight-bold">Difficulty in breathing : </label>
                </div>

                <div class="form-check form-check-inline e">
                    <input class="form-check-input" type="radio" name="difficult_breathing" id="inlineRadio1" value="1" required>
                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="difficult_breathing" id="inlineRadio2" value="0" required>
                    <label class="form-check-label" for="inlineRadio2">No</label>
                </div>
            </div>
        </div>
        <br><br>

        <div class="form-group">
            <label class="font-weight-bold">Have you travelled recently during past 14 days :</label>
            <select class="form-control custom-select" id="travelled14" name="travelled14" required>
                <option value=""></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <br>

        <div class="form-group">
            <label class="font-weight-bold">Do you have a travel history to a COVID-19 INFECTED AREA :</label>
            <select class="form-control custom-select" id="travel_covid" name="travel_covid" required>
                <option value=""></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <br>

        <div class="form-group">
            <label class="font-weight-bold">Do you have direct contact or is taking care of a positive COVID-19
                PATIENT :</label>
            <select class="form-control custom-select" id="covid_contact" name="covid_contact" required>
                <option value=""></option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <br><br>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
        </div>
    </form>
    <br><br>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous ">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous ">
    </script>
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
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


<?php
include("../Token_System/Includes/db.php");

if (isset($_POST['submit'])) {

    $temperature = (float) $_POST["temperature"];
    $age = (int) $_POST["age"];
    $cough = (int) $_POST["cough"];
    $cold = (int) $_POST["cold"];

    $sore_throat = (int) $_POST["sore_throat"];
    $body_pain = (int) $_POST["body_pain"];
    $fatigue = (int) $_POST["fatigue"];
    $headache = (int) $_POST["headache"];

    $diarrhea = (int) $_POST["diarrhea"];
    $difficult_breathing = (int) $_POST["difficult_breathing"];
    $travelled14 = (int) $_POST["travelled14"];
    $travel_covid = (int) $_POST["travel_covid"];

    $covid_contact = (int) $_POST["covid_contact"];

    // $sym  = array($temperature, $age, $cough, $cold, $sore_throat, $body_pain, $fatigue, $headache, $diarrhea, $difficult_breathing, $travelled14, $travel_covid, $covid_contact);

    // echo $sym;
    $result = exec("python Model.py $temperature $age $cough $cold $sore_throat $body_pain $fatigue $headache $diarrhea $difficult_breathing $travelled14 $travel_covid $covid_contact");

    $result_array = json_decode($result);

    echo $result_array;

    if ($result_array == "Infected") {
        echo "<script>window.open('Infected.htm','_self')</script>";
    } else {
        echo "<script>window.open('NonInfected.htm','_self')</script>";
    }
    // foreach ($result_array as $row) {
    //     echo $row . "<br>";
    // }
}




?>