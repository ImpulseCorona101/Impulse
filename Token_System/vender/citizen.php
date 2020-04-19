<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citizen</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        
        
        .inner {
            float: left;
        }
        
        .main {
            float: left;
        }
        
        .head {
            margin-left: -20%;
            /* background-color: black; */
            margin-top: 10%;
        }
        
        .mybarcode {
            color: black;
            margin-right: 21.5%;
            /* text-align: center; */
        }
        
        .mybarcodeimage {
            margin-top: 0%;
        }
        
        .text {
            min-width: 180px !important;
            display: inline-block !important;
            background-color: black;
            color: gold;
        }
        
        .mybtn {
            background-color: black;
            color: gold;
        }
        
        .mybtn:hover {
            background-color: gold;
            color: black;
        }
        
        .edit {
           background: ghostwhite;
            width:100%;
        }
        
        .guard {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #ffc857;
            /* background-color: #ffc857; */
            line-height: 0.1em;
            margin: 10px 10px 20px;
            font-family: serif;
        }
        
        .guard span {
            background: ghostwhite;
            padding: 0 10px;
            width: 80%;
        }
        
        .item1 {
            padding-bottom: 8%;
            width: 18rem;
            height: 500px;
            /* background-color: #ffc857; */
        }
        
        .item2 {
            padding-bottom: 8%;
            width: 18rem;
            height: 500px;
        }
        
        .item3 {
            padding-bottom: 8%;
            width: 18rem;
            height: 500px;
        }
        
        .block {
            background-color: ghostwhite;
            width: 80%;
        }
        
        .form-control {
            color: black;
            font-weight: bold;
            letter-spacing: 1px;
        }
        
        .shopname {
            text-align: center;
        }
        
        .card:hover {
            /* background-color: #ffc857;00 */
            box-shadow: 5px 10px 18px #888888;
            transform: scale(1.1);
        }
        
        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
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
            .mybarcode {
                margin-right: 0%;
                text-align: center;
            }
            .guard {
                width: 100%;
                text-align: center;
                border-bottom: 1px solid transparent;
                /* background-color: #ffc857; */
                line-height: 1.1em;
                margin: 10px 0px 20px;
                font-family: serif;
            }
            .guard span {
                background: ghostwhite;
                padding: 0 10px;
            }
            .item1 {
                margin-top: 10%;
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;
                text-align: center;
            }
            .item2 {
                margin-top: 10%;
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;
                text-align: center;
            }
            .item3 {
                margin-top: 10%;
                width: 80%;
                margin-left: 10%;
                margin-right: 10%;
                text-align: center;
            }
        }
        .barcode img{
            position: relative;
            width: 160px; 
            left:200px;  
            bottom:80px;     }
        .barcode {
            position:absolute;
            left: 800px;
            top:245px;
            width: 50px;
            border: #ffc857;
            color: ghostwhite;
        }
    </style>
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
    <div class="edit1">
    <div class="container edit">
        <div class="text-center mt-5">
            <br>

            <b><h1 class="guard"><span><b><i class="fas fa-user-alt mr-3"></i>Customer Details</b></span>
            </h1>
            </b>
        </div>
        <div class="row">
            
            <div class=" col-12 col-sm-6 col-lg-6  col-md-6 col-xl-6">
                <div class="input-group mt-5 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-user mr-2"></i>Full name</span>
                    </div>
                    
                    <input type="text" class="form-control inp " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="fullname" value="Ansh">
                </div>
                <div class="input-group mt-5 s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i class="fas fa-phone-alt mr-2"></i>Phone number </span>
                    </div>
                    <input type="phonenumber" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Phone number " value="9819104641">

                </div>
                <div class="input-group mt-5 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-calendar mr-2"></i>Date</span>
                    </div>
                    
                    <input type="text" class="form-control inp " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Date" value="21/04/2020">
                </div>
                <div class="input-group mt-5  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i class="fas fa-clock mr-2"></i>Phone number </span>
                    </div>
                    <input type="phonenumber" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Time" value="12:00 - 12:00">

                </div>
                <div class="input-group mt-5  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i class="fas fa-qrcode mr-2"></i> Unique Id </span>
                    </div>
                    <input type="phonenumber" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Id" value="5488440">

                </div>
                
                
                
               

            </div>
           
        
        
        </div>

    </div>

</div>
</body>





</html>