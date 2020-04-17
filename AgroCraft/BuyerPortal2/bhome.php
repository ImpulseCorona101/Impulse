<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <style>
         .myfooter {
               background-color: #292b2c;

               color: goldenrod;
               margin-top: 15px;
          }
          .aligncenter {
               text-align: center;
          }
          a {
               color: goldenrod;
          }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background-color: #292b2c;
        }

        .navbar-custom {
            background-color: #292b2c;
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

        .firstimage {
            height: 500px;
            width: 100%;
        }

        .mybtn {
            border-color: green;
            border-style: solid;
        }

        .card {
            width: 100%;
            height: 100%;
            margin: 10px;
        }

        .right {
            display: flex;
        }

        .left {
            display: none;
        }

        .cart {
            /* margin-left:10px; */
            margin-right: -9px;
        }

        .profile {
            margin-right: 2px;

        }

        .login {
            margin-right: -2px;
            margin-top: 12px;
            display: none;
        }

        .searchbox {
            width: 60%;
        }

        .lists {
            display: inline-block;
        }

        .moblists {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: -30%;
            margin-left: 35%;
        }

        /* .settings{
    margin-left:10px;
} */
        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .mycarousel {
                display: none;
            }

            .firstimage {
                height: auto;
                width: 90%;
            }

            .card {
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;

            }

            .col {
                margin-top: 20px;
            }

            .right {
                display: none;
                background-color: #ff5500;
            }

            /* 
            .settings{
            margin-left:79%;
        } */
            .left {
                display: flex;
            }

            .moblogo {
                display: none;
            }

            .logins {
                text-align: center;
                margin-right: 35%;
                padding: 15px;
            }

            .searchbox {
                width: 95%;
                margin-right: 5%;
                margin-left: 0%;
            }

            .moblists {
                display: inline-block;
                text-align: center;
                width: 100%;
            }
        }




        /* Image Grig */


        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
        }

        .header {
            text-align: center;
            padding: 32px;
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 25%;
            /* IE10 */
            flex: 25%;
            max-width: 25%;
            padding: 0 4px;
        }

        .column img {
            margin-top: 8px;
            vertical-align: middle;
            width: 100%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .column {
                -ms-flex: 100%;
                flex: 100%;
                max-width: 100%;
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
    <!-- <nav class="navbar navbar-expand-sm p-0  " style="   background-color: #292b2c;">

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

            </div>

            <div class="d-flex flex-row-reverse">
                <div class="p-2">Flex item 1</div>
                <div class="p-2">Flex item 2</div>
                <div class="p-2">Flex item 3</div>
            </div>



        </form>
    </nav><br> -->
    <nav class="navbar navbar-expand-xl ">
        <!-- <a href="#" class="navbar-brand">Academind</a> -->
        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div>
            </div>
            <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
            <a class="float-left" href="#">
                <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
            </a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
        </button>
        <a class="float-left" href="#">
            <img src="agro.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="input-group mb-1 ml-2 searchbox">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-search" style="font-size:20px;color:green; "></i></div>
                </div>
                <input type="text" class="form-control " id="inlineFormInputGroup" placeholder="Search for fruits,vegetables or crops ">
            </div>
            <div class="text-success  logins ">Login</div>
            <div class="list-group moblists">
                <a href="#" class="list-group-item list-group-item-action " style="background-color:#292b2c;text-align:center;color:goldenrod">
                    Profile
                </a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color:#292b2c;text-align:center;color:goldenrod">Transactions</a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color:#292b2c;text-align:center;color:goldenrod">subscriptions</a>
                <a href="#" class="list-group-item list-group-item-action" style="background-color:#292b2c;text-align:center;color:goldenrod">Farmers</a>
                <a href="#" class="list-group-item list-group-item-action " style="background-color:#292b2c;text-align:center;color:goldenrod">Logout</a>
            </div>
        </div>




        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div>
            </div>
            <div class="dropdown p-2 settings ">
                <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item  " style="padding-right:-20px;">Profile</a>
                    <a class="dropdown-item " style="padding-right:-20px;" href="#">Transactions</a>
                    <a class="dropdown-item " style="padding-right:-20px;" href="#">Subscriptions</a>
                    <a class="dropdown-item " style="padding-right:-20px;" href="#">Farmers</a>
                    <a class="dropdown-item " style="padding-right:-20px;" href="#">Logout</a>
                </div>
            </div>

            <!-- <div class="p-2 profile"><i class='far fa-user-circle' style='font-size:30px; '></i></div> -->
            <div class="text-success  login">Login</div>
        </div>

    </nav>
    <div class="container">
        <div class="d-flex justify-content-around bg-white mb-3">

            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Fruits
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Orange</a>
                        <a class="dropdown-item" href="#">Watermellon</a>
                        <a class="dropdown-item" href="#">Strawberry</a>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vegetables
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Patato</a>
                        <a class="dropdown-item" href="#">Carrot</a>
                        <a class="dropdown-item" href="#">Onion</a>
                    </div>
                </div>
            </div>
            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Crops
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Wheat</a>
                        <a class="dropdown-item" href="#">Rice</a>
                        <a class="dropdown-item" href="#">Bajra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container"> <img src="b4.jpeg" class="img-fluid firstimage d-block mx-auto" alt="Responsive image">
    </div>
    <br>
    <!-- <div class="container">
        <div class="d-flex justify-content-around bg-white mb-3">

            <div class="p-2 ">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        States
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Orange</a>
                        <a class="dropdown-item" href="#">Watermellon</a>
                        <a class="dropdown-item" href="#">Strawberry</a>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="dropdown">
                    <button class="btn btn-green mybtn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Districts
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Patato</a>
                        <a class="dropdown-item" href="#">Carrot</a>
                        <a class="dropdown-item" href="#">Onion</a>
                    </div>
                </div>
            </div>

        </div> -->
        <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit1.jfif" alt="Card image cap" height="300px">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-sm-12 col-md-4 col-xl-4 col-lg-4">
                    <div class="card p-3 ">
                        <br>
                        <div><b>
                                <h3><img src="iconsmall.png"> ABHISHEK
                            </b></h3>
                        </div>
                        <img class="card-img-top" src="myfruit4.jfif" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Orange</h5>
                            <p class="card-text">PRICE:-20rs/kg</p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-warning border-secondary" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b></span>
                                </div>
                                <input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <a href="#" class="btn btn-warning border-secondary" style="color:black"><b>Add to cart</b><img src="carticons.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="footer" class="myfooter">
          <div class="container">
               <div class="row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col aligncenter">
                         <p>Payment Option</p>
                         <img src="../Images/Website/paytm1.jpg" alt="paytm">
                         <img src="../Images/Website/cod.jpg" alt="paytm" style="height:37px">
                    </div>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                         <ul class="list-unstyled list-inline social text-center">
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                         </ul>
                    </div>
                    </hr>
               </div>
               <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                         <p><u><a href="https://www.agrocraft.com/">AgroCraft Corporation</a></u> is a Multitrading Company for farmers ang traders</p>
                         <p class="h6">Copy All right Reversed.<a class="text-green ml-2" href="https://www.google.com" target="_blank">Agrotech</a></p>
                    </div>
                    </hr>
               </div>
          </div>
</body>

</html>