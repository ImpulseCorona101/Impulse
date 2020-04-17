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
</head>
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

    .imageblock {
        padding-left: 0%;
    }

    .image {
        margin-left: 0%;
        background-color: #ff5500;
    }

    .addtocart {
        margin-top: 30%;
        padding: 4%;
        margin-bottom: 10%;
    }

    .saveforlater {
        margin-top: 30%;
        padding: 2%;
        margin-bottom: 10%;
    }

    .quantity {
        margin-top: 20%;

    }

    .quantitynumber {
        margin-top: 20%;
    }

    .wholequantity {
        width: 70%;
        margin-left: 15%;
        margin-right: 15%;
    }

    .price {
        margin-left: 0%;
        /* border-style: solid; */
        padding: 0%;
    }

    .stock {
        margin-right: -10%;
        /* border-style: solid; */
    }
    
.description{
    text-align: left;
}
.chat{
            margin-bottom: 20px;
            margin-top: 10px;
        }
        .query{
            margin-top:60px;
        }
       
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        .description{
    text-align: center;
    margin-top: 5px;
    margin-bottom:5px;
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

        .imageblock {
            padding-left: 0%;
        }

        .image {
            margin-left: 10%;
            background-color: #ff5500;
        }

        .addtocart {
            margin-top: 0%;
            margin-bottom: 0%;
            width: 88%;
            margin-left: 12%;
            margin-top: 10%;
            margin-bottom: 10%;
        }

        .saveforlater {
            margin-top: 0%;
            margin-bottom: 0%;
            width: 88%;
            margin-left: 12%;
            margin-top: 5%;
            margin-bottom: 10%;
        }

        .quantity {
            margin-top: 0%;

        }

        .quantitynumber {
            margin-top: 0%;
        }

        .wholequantity {
            margin-top: 0%;
            margin-bottom: 0%;
            width: 88%;
            margin-left: 12%;
            margin-top: 10%;
            margin-bottom: 10%;
        }

        .price {
            margin-top: 0%;
            margin-bottom: 0%;
            width: 80%;
            margin-left: 5%;
            margin-right: 15%;
            /* margin-top:10%;
    margin-bottom:10%; */
        }

        .stock {
            margin-top: 0%;
            margin-bottom: 0%;
            width: 80%;
            margin-right: 15%;
            margin-left: 5%;
            /* margin-top:10%;
    margin-bottom:10%; */
        }
        .chat{
            margin-bottom: 25px;
            margin-top: 20px;
        }
    }
</style>

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
    <div class="container">
        <div class="text-center">
            <h1>Omkar Banana</h1>
        </div>
        <div class="row">
            <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12   imageblock border border-dark"> <img src="fruit1.jpeg" class="d-flex mx-auto btn-dark image" height="220px;"><br>
        <b><div class="text-center"><h2>Banana</h2></div></b></div>
            <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 block border border-dark">
                <div class="text-center mt-2 ">
                    <!-- <h1>Omkar Bannana</h1> -->
                    <br>
                    <div class="row">
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 price">
                            <h5>Price : Rs.40/kg</h5>

                        </div>
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 stock">
                            <h5>Stock : 20 kgs</h5>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="input-group mb-3 wholequantity">
                            <div class="input-group-prepend quantity">
                                <span class="input-group-text bg-warning border-secondary quantitylabel" style="color:black" id="inputGroup-sizing-default"><b>Quantity</b><img src="bag2.png" class="ml-1 mb-1"></span>
                            </div>
                            <input type="number" class="form-control quantitynumber" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12"> <a href="#" class="btn btn-warning border-secondary addtocart" style="color:black"><b>Add to cart</b><i class="fa" style="font-size:17px; ">&#61562;</i></a></div>
                        <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12"> <a href="#" class="btn btn-warning border-secondary saveforlater" style="color:black"><b>Save For later</b><img src="saveforlater4.png" class="ml-1 mb-1"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 text-white" style="background-color:#292b2c;">
                <div class="text-center farmerdetails mt-4  " style="color:goldenrod"><b>
                     <b>   <h2>Farmer Details 
                        </h2></b>
                    </b>
                </div>
                <div class="details mt-1 text-center"><b> Name</b><span style="color:ghostwhite" >: Omkar</span>
                    <br>  
                    <b> Phone Number </b><span style="color:ghostwhite">:9819104641</span>
                    <br>
                   <a href="#" class="btn btn-warning border-secondary  chat" style="color:black;padding:2px;"><b> View Farmer Profile <i class="fas fa-id-card-alt pl-1"></i> </b></a>
                    <div class="text-center query"><h4  style="color:goldenrod">Have Some Query ?<br></h4>
<a href="#" class="btn btn-warning border-secondary  chat" style="color:black;padding:2px;"><b>CHAT HERE</b><img src="chat2.png" class="ml-1 mb-1"></a></div>
                    <!-- <b> Address</b> : Lorem ipsum dolor, sit Eum, ad eaque earum voluptates nemo vero possimus, dolor aspernatur ea aut quisquam quas consequuntur distinctio! -->
                </div>
            </div>
        </div>
        <div class="  description mt-0"><b>
                <h4>Description</h4>
            </b></div>
        <!-- <br> -->
        <div class="texty" style="margin-top:0%;"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. minus nulla. Illum quaerat iure dignissimos dolores odit quia.</div>

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