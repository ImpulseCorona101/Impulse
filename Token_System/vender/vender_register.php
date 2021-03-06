<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNIN</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-color: white;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    .x {
        height: 70vh;
        margin-top: 10vh;
        margin-bottom: 10vh;
        width: 100%;
    }
    
    .inp::placeholder {
        display: none;
        visibility: hidden;
    }
    /* .s {
        width: auto;
    }
     */
    
    .x {
        background-color: ghostwhite;
        height: 80%;
        width: 38%;
        margin-top: 0%;
    }
    
    .text {
        background-color: black;
        color: gold;
    }
    
    h2,
    h1 {
        color: black;
    }
    
    .imag {
        height: 120px;
    }
    
    .s {
        width: 96%;
        margin-left: 2%;
        margin-right: 2%;
    }
    
    .fp {
        margin-left: 0%;
        margin-top: -10%;
        text-align: right;
        color: black;
        font-size: 20px;
    }
    
    .nu {
        /* margin-right: 0%;
        margin-left: 25%; */
        margin-top: -10%;
        text-align: center;
        margin-left: -2%;
        color: black;
        font-size: 20px;
    }
    
    .guard {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #ffc857;
        /* background-color: #ffc857; */
        line-height: 0.1em;
        margin: 10px 0 20px;
        font-family: serif;
    }
    
    .guard span {
        background: ghostwhite;
        padding: 0 10px;
    }
    
    .lastbtn {
        color: goldenrod;
    }
    
    .text {
        min-width: 180px !important;
        display: inline-block !important
    }
    
    .inp {
        width: 10%;
    }
    
    .head {
        margin-left: -20%;
        /* background-color: black; */
        margin-top: 10%;
    }
    /* .area{

    } */
    
    .logo {
        margin-left: 0%;
        float: right;
    }
    
    .inner {
        float: left;
    }
    
    .main {
        float: left;
    }
    
    .timeinput {
        text-align: center;
        font-size: 150%;
    }
    /*     
    input[value=""]::-webkit-time-edit {
        color: transparent;
    }
    
    input:focus::-webkit-time-edit {
        color: #000;
    } */
    
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        .x {
            padding: 0;
            width: 80%;
            margin-left: 10%;
            margin-right: 10%;
            margin-top: 50px;
            /* margin-top: 100%; */
            /* background-color: black; */
        }
        /* .imag {
            display: none;
            visibility: hidden;
        } */
        .s {
            width: 100%;
            margin-left: 0;
            margin-right: 0;
        }
        .inp::placeholder {
            visibility: visible;
            color: black;
            text-align: center;
        }
        .input-group-prepend {
            display: none;
        }
        .fp {
            margin-left: 0%;
            margin-top: -30%;
            text-align: center;
            /* font-size: 20px; */
        }
        .nu {
            margin-right: 0%;
            margin-left: 0%;
            margin-top: -15%;
            text-align: center;
        }
        .text1 {
            text-align: center;
        }
        .text2 {
            text-align: center;
        }
        .button1 {
            margin-top: 10%;
        }
        .inp {
            border-color: black;
            border-style: solid;
        }
        .main {
            /* width: 80%;
            margin-left: 10%;
            margin-right: 10%; */
            display: flex;
            justify-content: center;
            align-items: center;
            float: none;
        }
        .inner {
            float: none;
            /* text-align: center; */
        }
        .timeinput {
            text-align: center;
            font-size: 100%;
        }
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../../index.php">Impulse</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../../index.php"> <span class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../../Coronavirus/CurrentStats.html">Covid-19 Status <span class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="shop_list.php"> Slot Booking <span class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../../AgroCraft/index.html">AgroCraft <span class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Application</a>
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
            <div class="text  login" style="color: white;">Login</div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn fas fa-bars"></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="../../User_Pages/profile.html">Profile</a>
                <a href="user_signin">Logout</a>
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
    <div class="row main  ">

        <div class="col-6 inner1">
            <img src="../../Images/Impulse.png" class="img-fluid logo  " alt="Responsive image" style="width: 150px; height:100px;">

        </div>
        <div class="col inner">
            <h1 class="text-left  font-weight-bolder head">Impulse</h1>
        </div>

    </div>
    <!-- <p class="line-1 anim-typewriter">Animation typewriter style using css steps()</p> -->

    <!-- <br> -->
    <!-- <img src="Guadian.png" >
     -->
    <!-- <img src="0001.png" class="mx-auto d-block imag" />
    <div class="text-center">
        <h1>Guardian</h1>
    </div>
    <br> -->
    <div class="container x   pl-5 pr-5 pb-3 align-middle ">
        <div class="text-center">
            <br>

            <b><h1 class="guard"><span><b>Register</b></span>
            </h1>
            </b>
        </div>
        <div class="form">
            <div class="input-group mt-5 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text  " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-user mr-2"></i>Full name</span>
                </div>
                <input type="text " class="form-control inp " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="fullname">
            </div>

            <!-- <div class="input-group mt-5 s">
                <div class="input-group-prepend ">
                    <span class="input-group-text text " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-user mr-2"></i>Username</span>
                </div>
                <input type="text " class="form-control inp " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Username">
            </div> -->
            <div class="input-group mt-5  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i class="fas fa-phone-alt mr-2"></i>Phone number </span>
                </div>
                <input type="phonenumber " class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Phone number ">

            </div>
            <div class="input-group mt-1  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text pr-5 pl-5  text" id="inputGroup-sizing-default"><i class="far fa-envelope mr-2"></i>Email </span>
                </div>
                <input type="email " class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Email ">

            </div>

            <div class="input-group mt-1  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text pr-3 pl-3  text" id="inputGroup-sizing-default"><i class="fas fa-store-alt mr-2"></i>Shop Name </span>
                </div>
                <input type="text " class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Shopname ">

            </div>
            <div class="input-group mt-1  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text  p-2  text" id="inputGroup-sizing-default"><i class="fas fa-hourglass-start mr-2"></i>Start Time</span>
                </div>
                <input type="text" onfocus="(this.type='time')" onfocusout="(this.type='text')" class="form-control inp timeinput mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Start Time ">

            </div>
            <div class="input-group mt-1  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text p-2  text" id="inputGroup-sizing-default"><i class="fas fa-hourglass-end mr-2"></i>End Time</span>
                </div>
                <input type="text" onfocus="(this.type='time')" onfocusout="(this.type='text')" class="form-control inp timeinput mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="End Time ">

            </div>
            <div class="input-group mt-1 s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text  text pl-3 pr-3 align-middle p-3" id="inputGroup-sizing-default"><i class="fas fa-home mr-2"></i>Address </span>
                </div>
                <!-- <label for="exampleFormControlTextarea1">Address</label> -->
                <textarea class="form-control inp area mb-5 " id="exampleFormControlTextarea1" rows="2" placeholder="Address"></textarea>
            </div>
            <div class="input-group mt-1  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-map-pin mr-2"></i>Pincode</span>
                </div>
                <input type="text" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Pincode">

            </div>
            <div class="input-group mt-1  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-lock mr-2"></i>Password</span>
                </div>
                <input type="password " class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Password">

            </div>
            <div class="input-group mt-1  s">
                <div class="input-group-prepend mb-5 ">
                    <span class="input-group-text  text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-lock mr-2"></i>Confirm Password</span>
                </div>
                <input type="password " class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Confirm Password">

            </div>
            <div class="d-flex justify-content-around flex-sm-column flex-md-column flex-lg-row flex-xl-row flex-column mb-5 " style="margin-top: -5%;">

                <div class="text1" style="font-size: 25px;">Already Registered ? </div>
                <!-- <div class="text2" style="font-size: 15px;"> New User ? </div> -->

            </div>

            <div class="d-flex justify-content-around flex-sm-column flex-md-column flex-lg-row flex-xl-row flex-column mb-3" style="margin-top: -5%;">
                <button type="button" class="btn btn-dark btn-lg " style=" color: gold;">Sign up</button>
                <!-- <button type="button" class="btn btn-dark btn-lg button1" style=" color: gold;"><i class="fas fa-shield-alt mr-2"></i>Login with Guardian</button> -->



            </div>
        </div>

</body>

</html>