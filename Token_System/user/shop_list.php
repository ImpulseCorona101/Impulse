<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
    <title>List Of Shops</title>

    <style>
        *{
            font-family: sans-serif;
        }
        .search{
            position: absolute;
           top: 12%;
           left:80%;
        }

        .form-actions {
            margin: 0;
            background-color: transparent;
            text-align: center;
        }
        
        .mobileContent {
            display: none;
        }
        
        @media only screen and (min-device-width:320px) and (max-device-width:480px) {
            .mobileContent {
                display: inline;
            }
            .table-responsive {
                display: none;
            }
        }
        body { 
            background-color:#f3f7f7;
 
        }
        .parent{
            font-family: sans-serif;
            width: 900px;
            left:140px;
        }
        h3{
            position: relative;
            margin-left: 125px;

            
        }
        
        .container-sm:hover{
            background-color: #dfdfdf;
            color: #2a5cff;
          
        }
        .status{
            position: absolute;
            bottom:350px;
            left:1100px;
            color: #A9A9A9;
            font-family: sans-serif;
        }
        label{
            color: #000;
        }
        
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Impulse</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url_for('Homepage') }}">Home <span
                            class=" sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url_for('About') }}">About Application</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url_for('Contact') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    
                </li>
            </ul>
        </div>
    </nav>
    
    
    <div class="container-fluid p-4 border-top shadow-sm p-3 mb-5 bg-white  ">
        <h3 class="header font-weight-bold">Select Your Shop</h3>
        

        
    </div>
    <div class="parent position-relative bg-white">
    <div class="text-left ">
        <div class="container-sm p-4 border border-top shadow-sm ">
            <a  href="booking.html">
            <h4 class="font-weight-bold">Shop Name</h4>
            </a>
            <h5>Address</h5>
            <h6>Phone Number</h6>
           
        </div>
    <div class="container-sm p-4 border border-top shadow-sm  ">
        <h4 class="font-weight-bold">Shop Name</h4>
        <h5>Address</h5>
        <h6>Phone Number</h6>
    </div>
    <div class="container-sm p-4 border border-top shadow-sm    ">
        <h4 class="font-weight-bold">Shop Name</h4>
        <h5>Address</h5>
        <h6>Phone Number</h6>
    </div>
    <div class="container-sm p-4 border border-top shadow-sm ">
        <h4 class="font-weight-bold">Shop Name</h4>
        <h5>Address</h5>
        <h6>Phone Number</h6>
    
    </div>
    
    </div>
    </div>
    <br>
    <br>
    <br>
    <div class="status font-weight-bold">
        <h5>TYPE</h5>
        
        <input type="checkbox" id="shop" class="shop" value="shop">
        <label for="shop"> Grocery Store</label><br>
        <input type="checkbox" id="shop" class="shop" value="shop">
        <label for="shop"> Medical Store</label><br>
        <input type="checkbox" id="shop" class="shop" value="shop">
        <label for="shop"> Clinic</label><br>
        <hr>

    </div>
    <div class="search">
        <form action="/action_page.php">
            <input type="text" placeholder="Enter Pincode" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
    </body>
    </html>
    
    