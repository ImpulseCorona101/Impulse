<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>

    <title>Impulse - Slot</title>
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
            <button onclick="myFunctio()" class="dropbtn fas fa-bars"></button>
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
    <?php
    getdet();
    ?>
     <div class='search'>
       

          
        
         <div class='full'>
    <div class='mob'>
    <div class='parent  bg-white'>
    <div class='text-left '>

        <div class='container-md p-4 border border-top shadow-lg '>
          
            <a class='fas fa-store fa-2x 'style='color: #D2691E;'></a>
             <br>
            <h4 class='font-weight-bold'>Shop Name</h4>
            <!--<input type='text' name='pname' autocomplete='off' placeholder='Shop Name'>-->
            
            <br>
            <br>
            <a class='fas fa-map fa-2x' style='color: #D2691E;'></a>
            <h4 class=' font-weight-bold'>Shop Address</h4>
            <!--<input type='text' name='sadd' autocomplete='off' placeholder='Shop Address'>-->

            <br>
            <br>
            <br>
            <a class='fas fa-phone fa-2x 'style='color: #D2691E;'></a>
            <h4 class='font-weight-bold'>Phone Number</h4>
            <!--<input type='text' name='pno' autocomplete='off' placeholder='Phonenumber'>-->
            
            <br>
            <br>
            <a class='fas fa-calendar fa-2x 'style='color: #D2691E;'></a>
            <h4 class=' font-weight-bold'>Date</h4>
            <!--<input type='text' name='Date' autocomplete='off' placeholder='Date'>
             -->
            <br>
            <br>
            <a class='fas fa-clock fa-2x 'style='color: #D2691E;''></a>
            <h4 class='mt-4 font-weight-bold'>Time Slot</h4>
            <!--<input type='text' name='Time' autocomplete='off' placeholder='Time Slot'>-->

            <br>
            <br>
            <br>
            <a class='fas fa-chair fa-2x' style='color: #D2691E;'></a>
            <h4 class='font-weight-bold'>Vacancy</h4>
            <!--<input type='text' name='Vacancy' autocomplete='off' placeholder='Vacancy'>-->
            
            
            </div>
    </div>
</div></div>
           
        </div>
     <div class='button1'>
      <h5 class='mt-2 ml-5'>Are  The Details Correct?</h5>
    <button type='button' class='btn btn-outline-success mt-3 ml-5 w-5 mr-5' onclick='myFunction()'>Yes</button>
    <button type='button' onclick='myFunction1()' class='btn btn-outline-danger ml-5 mr-5 mt-3'>No</button>
  </div>
            
    
    </form></div>

    <style>
      .hide{
        display: none;
      }
      .btn{
        width: 80px;
      }
      .button1{
        position: absolute;
        top: 910px;
        left:430px;
        width: 800px;
      }
    .full{
    	position: absolute;
    	top: 155%;
    	width: 900px;
    	height: 800px;
      left: 150px;
    }	
    .container-md{
      height: 1040px;
      width: 500px;
      text-align: center;
    }
    	.dropbtn {
    
  
  color: #343a40;
  padding: 8px;
  font-size: 18px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  margin-left: 50px;
  margin-right: 30px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2a5cff;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 20px;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  border-radius: 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #2a5cff;}

.show {display: block;}

form {
  outline: 0;
  float: left;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

form > .textbox {
  outline: 0;
  height: 50px;
  width: 400px;
  line-height: 42px;
  padding: 0 16px;
  background-color:   #FFD700
  color:  #FFD700;
  border: 0;
  float: left;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
}

form > .textbox:focus {
  outline: 0;
  background-color: #FFF;
}

form > .button {
  outline: 0;
  background: none;
  background-color: #2a5cff
  float: left;
  height: 50px;
  width: 42px;
  text-align: center;
  line-height: 42px;
  border: 0;
  color:  #FFD700;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: 16px;
  text-rendering: auto;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .4s ease;
  transition: background-color .4s ease;
  -webkit-border-radius: 0 4px 4px 0;
  border-radius: 0 4px 4px 0;
}

form > .button:hover {
  background-color: #2a5cff;
  cursor: pointer;
  color: #fff;
}
.search{
            position: absolute;
           top: 15%;
           left:9%;
        }

      input[type=number],select{
      	outline: 0;
  height: 35px;
  width: 80px;
  line-height: 42px;
  margin-top: 1px;
  background-color: rgba(255, 255, 255, 0.8);
  color: #212121;
  border-color:#2a5cff;
  
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;

      }
       input[type=text],input[type=time],input[type=number]{
       	outline: 0;
        height: 40px;
         width: 200px;
         line-height: 42px;
         padding: 0 16px;
         background-color: rgba(255, 255, 255, 0.8);
         color: #212121;
          border-color:#2a5cff;
         
         -webkit-border-radius: 4px 0 0 4px;
         border-radius: 4px 0 0 4px;

       }
        @media only screen and (min-device-width:370px) and (max-device-width:460px) {
          .container-md{
            position: relative;
            width: 250px;
            right: 100px;
            height: 1200px;
            
          }
          .nav{
            width: 100%;
          }
          .button1{
            position: absolute;
            left: 80px;
            top: 900px;
            width: 200px;

          }
          .full{
            width: 1px;
          }
          .btn{
            margin-top: 10px;
          }
          .hide{
            display: block;
          }
          
        }
         @media only screen and (min-device-width:300px) and (max-device-width:370px) {
          .nav{
            width: 120px;
          }
          .container-md{
            position: relative;
            right:  160px;
            width: 280px;
            bottom: 100px;
            top:10px;
          }
          .button1{
            position: relative;
            left: 1px;
            top: 1000px;
            width: 100px;
          }
          .form{
            display: none;
          }
          .full{
            width: 1px;
          }
          .button1{
            position: absolute;
            top: 900px;
            left: 40px;
          }
          .btn{
            margin-top: 10px;
          }
          .hide{
            display: block;
          }



          


    </style>


 <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunctio() {
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
function myFunction() {
  location.replace("success.php")
}
function myFunction1() {
  location.replace("booking.php")
}

</script>

</body>
</html>
<?php

function getdet()
{
    $con = mysqli_connect("localhost", "root", "", "impulse");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySql " . mysqli_connect_error();
    }
    $search_query = 421200;

    if (isset($_POST['searchquery'])) {
      $search_query = $_POST['searchquery'];
       
        $get_shop = "select * from shopkeeper where pincode = $search_query";
        $run_shop = mysqli_query($con, $get_shop);
        $count = mysqli_num_rows($run_shop);
        if ($count > 0) {
            while ($rows = mysqli_fetch_array($run_shop)) {
                $name = $rows['shopName'];
                $shopAddress = $rows['shopAddress'];
                $phone = $rows['phone'];
                
                echo " <div class='search'>
       

          
        
         <div class='full'>
    <div class='mob'>
    <div class='parent  bg-white'>
    <div class='text-left '>

        <div class='container-md p-4 border border-top shadow-lg '>
          
            <a class='fas fa-store fa-2x 'style='color: #D2691E;'></a>
            <h4 class='font-weight-bold'>$name</h4>
           
            
            <br>
            <br>
            <a class='fas fa-map fa-2x' style='color: #D2691E;'></a>
            <h4 class=' font-weight-bold'>$shopAddress</h4>
            <input type='text' name='sadd' autocomplete='off' placeholder='Shop Address'>

            <br>
            <br>
            <br>
            <a class='fas fa-phone fa-2x 'style='color: #D2691E;'></a>
            <h4 class='font-weight-bold'>$phone</h4>
            <input type='text' name='pno' autocomplete='off' placeholder='Phonenumber'>
            
            <br>
            <br>
            <a class='fas fa-calendar fa-2x 'style='color: #D2691E;'></a>
            <h4 class=' font-weight-bold'>Date</h4>
            <input type='text' name='Date' autocomplete='off' placeholder='Date'>

            <br>
            <br>
            <a class='fas fa-clock fa-2x 'style='color: #D2691E;''></a>
            <h4 class='mt-4 font-weight-bold'>Time Slot</h4>
            <input type='text' name='Time' autocomplete='off' placeholder='Time Slot'>

            <br>
            <br>
            <br>
            <a class='fas fa-chair fa-2x' style='color: #D2691E;'></a>
            <h4 class='font-weight-bold'>Vacancy</h4>
            <input type='text' name='Vacancy' autocomplete='off' placeholder='Vacancy'>
            
            
            </div>
    </div>
</div></div>
           
        </div>
     <div class='button1'>
      <h5 class='mt-2 ml-5'>Are  The Details Correct?</h5>
    <button type='button' class='btn btn-outline-success mt-3 ml-5 w-5 mr-5' onclick='myFunction()'>Yes</button>
    <button type='button' onclick='myFunction1()' class='btn btn-outline-danger ml-5 mr-5 mt-3'>No</button>
  </div>
            
    
    </form></div>";
    

        }
    }
}
}
?>
