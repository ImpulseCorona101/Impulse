<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script> -->
    <style>
        .navbar-custom {
            background-color: #ff5500;
        }

        /* change the brand and text color */
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            background-color: #292b2c;
        }

        .navbar-custom .navbar-nav .nav-link {
            background-color: #292b2c;
        }

        .navbar-custom .nav-item.active .nav-link,
        .navbar-custom .nav-item:hover .nav-link {
            background-color: #292b2c;
        }

        .carousel-item {
            border-style: solid;
            border-color: black;
        }

        .mybtn {
            border-color: green;
            border-style: solid;
        }


        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .mycarousel {
                display: none;
            }




        }
    </style>
    <!-- <script>
        var a;

        function display() {
            if (a == 0) {
                document.getElementById("majic").style.display = "none";
                document.getElementById("show").style.display = "inline-block";
                return a = 1;
            } else {
                document.getElementById("majic").style.visibility = "visible";
                document.getElementById("show").style.visibility = "hidden";
                // document.getElementById("show").style. visibility= "hidden";
                return a = 0;
            }

        }
    </script> -->

</head>

<body>
    <nav class="navbar navbar-expand-sm p-0 " style="   background-color: #292b2c;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon float-left  "><i class="fas fa-bars text-white mr-5 mt-1"></i></span>
        </button>
        <form class="form-inline" action="/action_page.php">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="float-left" href="#">
                    <img src="agro.png" class="float-left mr-3 ml-2 " alt="Logo" style="height:50px;">
                </a>
                <div class="input-group mb-1">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                </div>

                <ul class="nav text-right navbar-nav navbar-right">
                    <li><a href="/">login</a></li>
                    <li><a href="/">Signup</a></li>
                    <li><a href="/">Logout</a></li>
                </ul>

            </div>

            <!-- <div class="  my-2 my-lg-0">
                <ul class="navbar-nav ">
                    <li class="nav-item active float-right">
                        <a class="nav-link float-right" href="#">Active</a>
                    </li>
                    <li class="nav-item float-right">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item float-right">
                         <a class="nav-link" href="#">Link</a> -->
            <!-- <button type="button" class="btn btn-danger">Filter</button>
                    </li>

                </ul>
            </div> -->



        </form>
    </nav><br>

    <div id="show">
        <div class="d-flex justify-content-around bg-white mb-3">

            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fruits
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vegetables
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crops
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
  




    <br>
    <br>




    <div id="majic">
        <div class="d-flex justify-content-around bg-white mb-3">

            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fruits
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vegetables
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>

    <div class="text-center" style="font-size:120px;">
        <h1><b>Fresh Fruits</b></h1>
    </div>
    
    <img src="b4.jpeg" class="rounded mx-auto d-block" style="height:50px;width:700px" alt="Responsive image">
  
</body>

</html>