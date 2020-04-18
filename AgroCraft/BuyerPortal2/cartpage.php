<!DOCTYPE html>
<html lang="en">
<!-- kro to dcv -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table td,
    .table th {
        padding: 8px 8px;
        border: 0.5px solid black;
        text-align: center;
        font-size: 16px;
        background-color: white;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 0px solid #dee2e6;
    }

    .table th {
        background-color: #292b2c;
        color: goldenrod;
    }

    .table tbody tr:nth-child(even) {
        background-color: #f5f5f5;
    }

    .add {
        width: 40%;
    }

    @media only screen and (min-device-width:320px) and (max-device-width:480px) {

    
        .right {
            display: none;
            background-color: #ff5500;
            
        }


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

        .table thead {
            display: none;
            background-color: #292b2c;
        color: goldenrod;
        }

        .table,
        .table tbody,
        .table tr,
        .table td {
            display: block;
            width: 100%;
         
        }

        .table tr {
            margin-bottom: 15px;
      
        }

        .table td {
            text-align: right;
            padding-left: 50%;
            text-align: right;
            position: relative;

         
        }

        .table td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            width: 50%;
            padding-left: 15px;
            font-size: 15px;
            font-weight: bold;
            text-align: left;
            /* background-color: #292b2c;
        color: goldenrod; */
        }

        .add {
            width: auto;
        }

         .emptycart{
            /* margin-left: 20%;
            width:80%;  */
            float:none;
            text-align: center;

        }
       .continueshopping{
            /* margin-top:20%;
            margin-left: 20%;  */
            float:none;
            text-align: center;
            margin-top: -20%;
            
        }
        .grandtotal{
            /* margin-right: 20%; */
        float:none;
        margin-top:40%;
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
        <div class="text-left">
            <h3>Your Items :-</h3>
            <hr>
            <table class="table">
                <thead>
                    <th>S.No</th>
                    <th>Item Name</th>
                    <th>Unit Price </th>
                    <th style="width:25%;">Quantity</th>
                    <th>Subtotal</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="S.No" style="font-size:20px;">1</td>
                        <td data-label="Item Name " style="font-size:20px;">Omkar Banana</td>
                        <td data-label="Unit Price" style="font-size:20px;">54</td>
                        <td data-label="Quantity p-0">
                            <div class="d-flex justify-content-center p-0">
                                <div class="input-group add" style="margin-left:0%">
                                    <div class="input-group-prepend">
                                        <!-- <button type="button" class="btn btn-sm" style="font-size:12px;background-color:#292b2c;color:goldenrod"><b style="font-size:22px;padding:5%;">+</b></button> -->

                                    </div>
                                    <input type="number" class="form-control text-center " style="padding:0%" aria-label="Dollar amount (with dot and two decimal places)" value="1">
                                    <div class="input-group-prepend ">
                                        <!-- <button type="button" class="btn btn-sm" style="font-size:12px;background-color:#292b2c;color:goldenrod"><i class="fas fa-plus" style="font-size:12px;"></i></button> -->

                                    </div>
                                </div>
                            </div>
                        </td>
                        <td data-label="Subtotal" style="font-size:20px;">50</td>
                        <td data-label="Delete" style="font-size:20px;"><i class="far fa-times-circle"></i></td>
                    </tr>

                    <tr>
                        <td data-label="S.No" style="font-size:20px;">1</td>
                        <td data-label="Item Name " style="font-size:20px;">Omkar Banana</td>
                        <td data-label="Unit Price" style="font-size:20px;">54</td>
                        <td data-label="Quantity p-0">
                            <div class="d-flex justify-content-center p-0">
                                <div class="input-group add" style="margin-left:0%">
                                    <div class="input-group-prepend">
                                        <!-- <button type="button" class="btn btn-sm" style="font-size:12px;background-color:#292b2c;color:goldenrod"><b style="font-size:22px;padding:5%;">+</b></button> -->

                                    </div>
                                    <input type="number" class="form-control text-center " style="padding:0%" aria-label="Dollar amount (with dot and two decimal places)" value="1">
                                    <div class="input-group-prepend ">
                                        <!-- <button type="button" class="btn btn-sm" style="font-size:12px;background-color:#292b2c;color:goldenrod"><i class="fas fa-plus" style="font-size:12px;"></i></button> -->

                                    </div>
                                </div>
                            </div>
                        </td>
                        <td data-label="Subtotal" style="font-size:20px;">50</td>
                        <td data-label="Delete" style="font-size:20px;"><i class="far fa-times-circle"></i></td>
                    </tr>


                </tbody>
            </table>
        </div>

    </div>
    <div class="container">
        <div class="float-none float-sm-none float-md-none float-lg-left float-xl-left  emptycart"><button type="button" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#FFD700">Empty Cart<i class="fas fa-shopping-cart ml-1"></i> </div>
        <!-- <div class="grandtotal  float-none float-sm-none float-md-none float-lg-right float-xl-right"></div><br> -->
        <br>      <div class=" float-none float-sm-none float-md-none float-lg-right float-xl-rightcheckout mr-0 p-2 border border-dark  " style="border-radius:5%;">
            <h2>Grand total = Rs.345 </h2><button type="button" class="btn btn-lg border border-dark d-flex mx-auto " style="font-size:22px;color:black;background-color:#FFD700">Checkout<i class='fas fa-arrow-right ml-2 mt-2 mb-1'></i>
        </div>
        <br>
        <br>
        <div class=" float-none float-sm-none float-md-none float-lg-left float-xl-left continueshopping mt-5"><button type="button" class="btn btn-lg  border border-dark " style="font-size:22px;color:black;background-color:#FFD700">Continue Shopping <i class="fas fa-shopping-bag ml-1"></i></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
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