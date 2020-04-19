<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNIN</title>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
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
    <br>

    <div class="container mr-5">
    <div class="row text-center">
        <div class="col-sm-6 col-sm-offset-5">
        <br><br> <h2 style="color:#0fad00">Thank You!</h2>
        
        <h3></h3>
        <p style="font-size:20px;color:#5C5C5C;">We have sent you an email  with your QrCode <br> Please go to your above profile to check</p>
        <a href="../../User_Pages/profile.html" class="btn btn-success">     Go To Profile      </a>
    <br><br>
        </div>
        
    </div>
</div>
<style >
    .hide{
        display: none;
    }
    .container{
        position: absolute;
        left: 300px;
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
</body>
</html>