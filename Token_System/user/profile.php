<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<style>
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
        background-color: ghostwhite;
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
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Impulse</a>
        

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item ">
                    <a class="nav-link" href="../../index.php">Home <span class=" sr-only">(current)</span></a>
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
        </div>
         </div>
           
        </div>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn fas fa-bars"></button>
            <div id="myDropdown" class="dropdown-content">
                <a href="profile.html">Profile</a>
                <a href="user_signin.php">Logout</a>
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
    <div class="container edit">
        <div class="text-center">
            <br>

            <b><h1 class="guard"><span><b><i class="fas fa-pencil-alt mr-3"></i>Edit Your Profile </b></span>
            </h1>
            </b>
        </div>
        <div class="row">
            <div class=" col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6">
                <div class="input-group mt-5 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-user mr-2"></i>Full name</span>
                    </div>
                    <input type="text" class="form-control inp " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="fullname" value="Ansh">
                </div>

            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 ">

                <div class="input-group mt-5  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i class="fas fa-phone-alt mr-2"></i>Phone number </span>
                    </div>
                    <input type="phonenumber" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Phone number " value="9819104641">

                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6">

                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-5 pl-5  text" id="inputGroup-sizing-default"><i class="far fa-envelope mr-2"></i>Email </span>
                    </div>
                    <input type="email" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Email " value="anshmiteshchhadva@gmail.com">

                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 ">

                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-map-pin mr-2"></i>Pincode</span>
                    </div>
                    <input type="text" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Pincode" value="400 703">

                </div>

            </div>
        </div>
        <div class="row">
            <div class=" col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6">
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-lock mr-2"></i>Password</span>
                    </div>
                    <input type="password" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Password" value="Password">

                </div>

            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 ">
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-home mr-2"></i>Address</span>
                    </div>
                    <input type="text" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Address" value="19/502,Fam chs ltd,Sector-11">

                </div>

            </div>
        </div>

    </div>
    <div class="row main  ">

        


        </div>
        

    </div>
    <br>

   


    <!--<div class="container edit">
        <div class="text-center">
            <br>

            <b><h1 class="guard"><span><b><i class="fas fa-pencil-alt mr-3"></i>Edit Your Profile </b></span>
            </h1>
            </b>
        </div>
        <div class="row">
            <div class=" col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6">
                <div class="input-group mt-5 s">
                    <div class="input-group-prepend ">
                        <span class="input-group-text text  " id="inputGroup-sizing-default" style="font-size: 15px;"><i class="fas fa-user mr-2"></i>Full name</span>
                    </div>
                    <input type="text" class="form-control inp " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="fullname" value="Ansh">
                </div>

            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 ">

                <div class="input-group mt-5  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text  text pl-3 pr-3" id="inputGroup-sizing-default"><i class="fas fa-phone-alt mr-2"></i>Phone number </span>
                    </div>
                    <input type="phonenumber" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Phone number " value="9819104641">

                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6">

                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-5 pl-5  text" id="inputGroup-sizing-default"><i class="far fa-envelope mr-2"></i>Email </span>
                    </div>
                    <input type="email" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Email " value="anshmiteshchhadva@gmail.com">

                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 ">

                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-map-pin mr-2"></i>Pincode</span>
                    </div>
                    <input type="text" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Pincode" value="400 703">

                </div>

            </div>
        </div>
        <div class="row">
            <div class=" col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6">
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-lock mr-2"></i>Password</span>
                    </div>
                    <input type="password" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Password" value="Password">

                </div>

            </div>
            <div class="col-12 col-sm-6 col-lg-6 col-md-6 col-xl-6 ">
                <div class="input-group mt-1  s">
                    <div class="input-group-prepend mb-5 ">
                        <span class="input-group-text pr-4 pl-4 text" id="inputGroup-sizing-default" style="width: 100%"><i class="fas fa-home mr-2"></i>Address</span>
                    </div>
                    <input type="text" class="form-control inp mb-5 " aria-label="Sizing example input " aria-describedby="inputGroup-sizing-default " placeholder="Address" value="19/502,Fam chs ltd,Sector-11">

                </div>

            </div>
        </div>

    </div>-->
    <br>
    <br>
    <div class="container block">
        <br>
        <!-- <div class="text-center">
            <h1>Medical Terms </h1>
            <br>
        </div> -->
        <div class="text-center">
            <br>

            <b><h1 class="guard"><span><b><i class="fas fa-store mr-3"></i>Grocery Shop Reservation</b></span>
            </h1>
            </b>
            <br>
        </div>
        <div class="d-flex justify-content-around flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row rounded mx-auto d-block">
            <div class="card item1 border border-dark p-4">
                <img src="https://image.flaticon.com/icons/png/512/819/premium/819782.png" class="card-img-top rounded mx-auto d-block mybarcodeimage" alt="...">
                <div class="card-body Shop">
                    <h4 class="card-title shopname">Store Name</h4>
                    
                    <h5 class="card-title date">Date</h5>
                    <h5 class="card-title time">Time</h5>
                     <h5 class="card-title Uniqueid">Unique Code</h5>
                    <a href="#" class="mybtn btn btn-primary mybtn mx-auto d-block">Get Directions</a><br><br><br>
                </div><br><br><br>
            </div>
            <br><br><br>
            <div class="card item2 border border-dark p-4">
                <img src="https://image.flaticon.com/icons/png/512/819/premium/819782.png" class="card-img-top rounded mx-auto d-block mybarcodeimage" alt="...">
                <div class="card-body Shop">
                    <h4 class="card-title shopname">Store Name</h4>
                    
                    <h5 class="card-title date">Date</h5>
                    <h5 class="card-title time">Time</h5>
                     <h5 class="card-title Uniqueid1">Unique Code</h5>
                    <a href="#" class="mybtn btn btn-primary mybtn mx-auto d-block">Get Directions</a><br><br><br>
                </div><br><br><br>
            </div>
            <br><br><br>
            <div class="card item3 border border-dark p-4">
                <img src="https://image.flaticon.com/icons/png/512/819/premium/819782.png" class="card-img-top rounded mx-auto d-block mybarcodeimage" alt="...">
                <div class="card-body Shop">
                    <h4 class="card-title shopname">Store Name</h4>
                    
                    <h5 class="card-title date">Date</h5>
                    <h5 class="card-title time">Time</h5>
                     <h5 class="card-title Uniqueid2">Unique Code</h5>
                    <a href="#" class="mybtn btn btn-primary mybtn mx-auto d-block">Get Directions</a><br><br><br>
                </div><br><br><br>
            </div>
            <br><br><br> </div>
        <!-- <div class="d-flex justify-content-around flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row">


            <div class="item1 "> <img src="barcode.png" class="rounded mx-auto d-block mybarcodeimage" alt="..."></div>
            <div class="item2"> <img src="barcode.png" class="rounded mx-auto d-block mybarcodeimage" alt="...">
            </div>
            <div class="item3"> <img src="barcode.png" class="rounded mx-auto d-block mybarcodeimage" alt="...">
            </div>
        </div>
    </div>-->
        <br>
        <div class="container block">
            <br>
            <!-- <div class="text-center">
            <h1> Shop codes </h1>
            <br>
        </div> -->
            <div class="text-center">
                <br>

                <b><h1 class="guard"><span><b><i class="fas fa-store mr-3"></i>Grocery Store Reservation</b></span>
                </h1>
                </b><br>
            </div>
            <div class="d-flex justify-content-around flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row rounded mx-auto d-block">
                <div class="card item1 border border-dark p-4">
                    <img src="https://image.flaticon.com/icons/png/512/819/premium/819782.png" class="card-img-top rounded mx-auto d-block mybarcodeimage" alt="...">
                    <div class="card-body Shop">
                    <h4 class="card-title shopname">Store Name</h4>
                    
                    <h5 class="card-title date">Date</h5>
                    <h5 class="card-title time">Time</h5>
                     <h5 class="card-title Uniqueid3">Unique Code</h5>
                    <a href="#" class="mybtn btn btn-primary mybtn mx-auto d-block">Get Directions</a><br><br><br>
                </div>
                    <br> <br> <br>
                </div>
                <div class="card item2 border border-dark p-4">
                    <img src="https://image.flaticon.com/icons/png/512/819/premium/819782.png" class="card-img-top rounded mx-auto d-block mybarcodeimage" alt="...">
                    <div class="card-body Shop">
                    <h4 class="card-title shopname">Store Name</h4>
                    
                    <h5 class="card-title date">Date</h5>
                    <h5 class="card-title time">Time</h5>
                     <h5 class="card-title Uniqueid4">Unique Code</h5>
                    <a href="#" class="mybtn btn btn-primary mybtn mx-auto d-block">Get Directions</a><br><br><br>
                </div>
                </div>
                <div class="card item3 border border-dark p-4">
                    <img src="https://image.flaticon.com/icons/png/512/819/premium/819782.png" class="card-img-top rounded mx-auto d-block mybarcodeimage" alt="...">
                    <div class="card-body Shop">
                    <h4 class="card-title shopname">Store Name</h4>
                    
                    <h5 class="card-title date">Date</h5>
                    <h5 class="card-title time">Time</h5>
                     <h5 class="card-title Uniqueid5">Unique Code</h5>
                    <a href="#" class="mybtn btn btn-primary mybtn mx-auto d-block">Get Directions</a><br><br><br>
                </div>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-around flex-column flex-sm-column flex-md-row flex-lg-row flex-xl-row">


            <div class="item1 "> <img src="barcode.png" class="rounded mx-auto d-block mybarcodeimage" alt="..."></div>
            <div class="item2"> <img src="barcode.png" class="rounded mx-auto d-block mybarcodeimage" alt="...">
            </div>
            <div class="item3"> <img src="barcode.png" class="rounded mx-auto d-block mybarcodeimage" alt="...">
            </div>
        </div> -->
        </div>
        <br>
        <br>
        <script>
        var number = Math.floor(Math.random() * 100000) + 1;
        console.log(number);
        
        const Uniqueid = document.querySelector(".Uniqueid");
        Uniqueid.textContent =  "Unique Code :" + number;

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
    <style >
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
    @media only screen and (min-device-width:320px) and (max-device-width:480px){
        .container{
            position: relative;
            left:   10px;
            

        }
        
        
        p{
            font-size: 2px;
        }
        .hide{
            display: block;
        }
    }
</style>
</body>

</html>