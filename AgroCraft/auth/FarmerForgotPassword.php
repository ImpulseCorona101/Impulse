<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
<!-- 
    <style>
        h1 {
            background-color: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            text-align: center;
            cursor: pointer
        }

        .box {
            color: rgb(6, 36, 7);
            width: 350px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;

            border-radius: 16px;
            border-color: green;
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/forgotpassword.jpg);
            border: chartreuse;
        }

        form {
            margin: 10px;
            padding: 10px;
            background-color: rgb(247, 248, 247);

        }

        input {
            padding: 7px;
            margin: 10px;
            border-color: rgb(78, 180, 121);
            display: inline-block;
            border-radius: 16px;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            color: rgb(246, 248, 246);
            background-color: green;
            /* display: inline-block; */
            border-radius: 16px;
            border-color: rgb(3, 66, 34);
            width: 44%;
        }

        input[type="submit"]:hover {
            background-color: rgb(97, 16, 33);
            outline: none;
            border-color: blanchedalmond;
            color: rgb(155, 248, 4);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(155, 248, 4);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;

        }
    </style> -->
    <style>
        h3 {
            background-color: transparent;
            font-family:  sans-serif;
            text-align: center;
            cursor: pointer;
            /* color: rgb(0, 61, 153); */
            color:black;
        }

        .box {
            color: rgb(6, 36, 7);
            width: 370px;
            line-height: 40px;
            margin: auto;
            text-align: center;
            margin-top: 50px;
            padding: 5px;
            border-style: outset;
            border-width: 5px;
            border-radius: 16px;
            /* border-color: rgb(0, 172, 230); */
            border-color:black;
        }

        body {
            /* background-image: url(Images/Website/FarmerLogin.jpg); */
            /* background: black; */
            /* background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            background-image: url(../Images/Website/BuyerLogin.jpeg); */
            border: chartreuse;
        }

        form {
            margin: 10px;
            padding: 20px;
            background-color: rgb(247, 248, 247);

        }

        .inp {
            padding: 5px;
            margin: 10px;
            /* border-color: rgb(0, 172, 230); */
            border-color:black;
            display: inline-block;
            border-radius: 16px;
            width:80%;
            text-align: center;
        }

        input[type="submit"] {
            cursor: pointer;
            font-size: 17px;
         padding-left:5%;
         padding-right:5%;
            font-weight: bold;
            color: goldenrod;
            background-color:#292b2c;
            border-radius: 16px;
            border-color:black;
            width: auto;
        }
/* 
        input[type="submit"]:hover {
            background-color: rgb(0, 153, 255);
            outline: none;
            color: rgb(255, 255, 255);
            border-radius: 20%;
            border-style: outset;
            border-color: rgb(0, 57, 230);
            font-weight: bolder;
            width: 54%;
            font-size: 18px;

        } */
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


    .mybtn {
        border-color: green;
        border-style: solid;
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
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
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
        } */

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
        /* .pic{
        height:auto;
    } */
    
    /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */
    }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-xl ">
        <!-- <a href="#" class="navbar-brand">Academind</a> -->
        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> 5 </span>
                </div>
            </div>
            <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px; visibility:hidden;'></i></div>
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
    <div class="box">
        <form action="FarmerForgotPassword.php" method="post">
            <h3>FORGOT PASSWORD</h3>
            <br>
            <input type="phonenumber"class="inp" name="phonenumber" placeholder="Phone Number"><br>
            <input type="text" class="inp" name="pan" placeholder="Pan Number"><br>

            <input type="password" class="inp" name="password" placeholder="Password" required><br>
            <input type="password" class="inp" name="confirmpassword" placeholder="Confirm Password" required><br>
            <span style=" display:block;  margin-bottom: .75em; "></span>
<br>
            <input type="submit" name="register" value="Update Password">
        </form>
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


<?php
include("../Includes/db.php");
if (isset($_POST['register'])) {
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $pan = mysqli_real_escape_string($con, $_POST['pan']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);

    $query = "select * from farmerregistration where farmer_phone = '$phonenumber' and farmer_pan = '$pan'";
    $run_query = mysqli_query($con, $query);
    $count_rows = mysqli_num_rows($run_query);

    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '2345678910111211';
    $encryption_key = "DE";

    $encryption = openssl_encrypt(
        $password,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    if (strcmp($password, $confirmpassword) == 0) {
        if ($count_rows != 0) {
            $update_query = "update farmerregistration set farmer_password = '$encryption' 
                                 where farmer_phone = '$phonenumber' and farmer_pan = '$pan' ";

            $run_query = mysqli_query($con, $update_query);

            echo "<script>alert('Password Updated Successfully');</script>";
            echo "<script>window.open('FarmerLogin.php','_self')</script>";
        } else if ($count_rows == 0) {
            echo "<script>alert('Please Enter Valid Details');</script>";
        }
    } else {
        echo "<script>alert('Please Enter Valid Details');</script>";
    }
}

?>