<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>Impulse - About</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
        }

        .mobileContent {
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

        .hide {
            display: none;
        }

        @media only screen and (min-device-width:200px) and (max-device-width:770px) {
            .mobileContent {
                display: inline;
            }

            .table-responsive {
                display: none;
            }

            .newbtn {
                margin-top: 10%;
            }

            .hide {
                display: block;

            }

        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.php">Impulse</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../index.php">Home <span class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../Coronavirus/CurrentStats.php">Covid-19 Status <span class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../Token_System/user/shop_list.php"> Slot Booking <span class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../AgroCraft/index.html">AgroCraft <span class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.php">About Application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Token_System/user/Contact.php">Contact Us</a>
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
            include("../Token_System/Includes/db.php");
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
                    echo " <a href='../Token_System/user/profile.php'>Profile</a>";

                    echo "<a href='../Token_System/user/user_signin.php'>Logout</a>";
                } else {

                    echo "<a href='../Token_System/user/user_signin.php'>Login</a>";
                }
                ?>
                <div class="hide">
                    <a href="../index.php">Home</a>
                    <a href="../Coronavirus/CurrentStats.php">Covid-19 Status</a>
                    <a href="../Token_System/user/shop_list.php">Book Your Slot</a>
                    <a href="../AgroCraft/index.html">Agrocraft</a>
                    <a href="About.php">About Application</a>
                    <a href="../Token_System/user/Contact.php">Contact Us</a>
                    <div>


                    </div>
                </div>
            </div>
        </div>

    </nav>
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

    <br>
    <div class="row">
        <div class="col">
            <h1 class="text-right mt-3 font-weight-bolder">Impulse</h1>
        </div>
        <div class="col">
            <img src="../Images/Impulse.png" class="img-fluid" alt="Responsive image" style="width: 150px; height:100px;">
        </div>
    </div>
    <!-- <div class="text-center">
        <img src="/static/Impulse.png" class="rounded mx-auto d-block" alt="Responsive image">
        <h1 style="margin-right: 3%;">IMPULSE</h1>
    </div> -->

    <br>
    <div class="container" style="width:100%">

        <div class="card border border-dark">
            <h5 class="card-header text-center ">What is Impulse ?</h5>
            <div class="card-body ">
                <h5 class="card-title text-center "></h5>
                <p class="card-text">Impulse is an online portal with a sterling vision to help fight the Covid-19 virus which is voraciously gripping the world in its entirety.

                    The application provides a system to detect the virus, and also prevents crowd formations but at the same time, fulfil the basic needs of the people, without hampering the rules of the lockdown. It also bridges the gap between the seller and the buyer, which helps in practicing social distancing.
                </p>
                <!-- <div class="form-actions">
                    <a href="{{ url_for('CurrentStatus') }}" class="btn btn-primary mx-5 btn-lg">Current Status</a>
                    <a href=" {{ url_for('Coronavirus') }}" class="btn btn-primary btn-lg mx-5 newbtn ">Detect
                        COVID-19</a>
                </div> -->
            </div>
        </div>
        <br>
    </div>
    <div class="container" style="width:100%">

        <div class="card border border-dark">
            <h5 class="card-header text-center ">Token System</h5>
            <div class="card-body ">
                <h5 class="card-title text-center">Slot Booking for Grocery Store</h5>
                <p class="card-text">This section has a token system for grocery stores and clinics ,In which
                    customers can book a slot (Date and Time) in which he wishes to arrive at the shop or clinic.Each
                    Particular slot can only be booked by certain number of peoples (Ensuring social distancing) .</p>
                <div class="form-actions">
                    <a href="../Token_System/user/shop_list.php" class="btn btn-primary mx-5 btn-lg">Book Now</a>

                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="container" style="width:100%">

        <div class="card border border-dark">
            <h5 class="card-header text-center ">Connecting Farmer and Buyer Across the Country</h5>
            <div class="card-body ">
                <h5 class="card-title text-center">Agrocraft </h5>
                <p class="card-text">AgroCraft an ecommerce platform
                    for farmers to sell their products at better rate , and buyers (vendors,organization) can get directly in
                    touch with these local farmers to fulfill society needs .Keeping in mind the digital divide , Farmers can
                    upload their products via SMS and CALL (customer care)</p>
                <div class="form-actions">
                    <a href="../AgroCraft/index.html" class="btn btn-primary mx-5 btn-lg">Start Buying</a>

                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="container" style="width:100%">

        <div class="card border border-dark">
            <h5 class="card-header text-center">Coronavirus Section</h5>
            <div class="card-body ">
                <h5 class="card-title text-center">Prediction And Current Stats</h5>
                <p class="card-text">This Section Predicts whether an individual is been infected with Coronavirus or not , Additional to that it also shows the current stats state wise.</p>
                <div class="form-actions">
                    <a href="../Coronavirus/CurrentStats.php" class="btn btn-primary mx-5 btn-lg">Current Status</a>
                    <a href="../Coronavirus/Coronavirus.php" class="btn btn-primary btn-lg mx-5 newbtn ">Detect
                        COVID-19</a>
                </div>
            </div>
        </div>
        <br>
    </div>
    <br><br>
    <div class="form-actions">
        <a href="../index.php"><button type="submit" class="btn btn-primary btn-lg mx-auto" type="submit">Go Back To Home
            </button></a>
    </div>
    <br><br>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>