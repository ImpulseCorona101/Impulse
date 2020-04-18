<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Impulse- Booking</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script type="text/javascript" src="qrcode.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
          <a class="nav-link" href="#">Contact Us</a>
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
        <a href="../../User_Pages/SIGN_IN.html">Logout</a>
        <div class="hide">
          <a href="../../index.php">Home</a>
          <a href="../../Coronavirus/CurrentStats.html">Covid-19 Status</a>
          <a href="../../AgroCraft/index.html">Agrocraft</a>
          <a href="#about">Contact Us</a>
          <div>

          </div>
        </div>
      </div>
    </div>

  </nav>
  <form >
    <div class="container ">
      <div class="row">
        <div class="col-md-5 offset-md-3 mt-5 ">
          <div class="card shadow-sm">
            <div class="card-header bg-light  shadow-sm">
              <h6 class="font-weight-bold">Select Your Date</h6>
            </div>
            <div class="card-body">
              <form action="#">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" id="demo1">
                     <input type="text" id="date" name="date" class="datepicker form-control" autocomplete="off" placeholder="Select Date" onchange= "addressFunction()" required onkeydown="return false">
                      <code class=" text ">Note : Dates Can Only be Selected For This Week</code>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <!-- <button type="submit" onclick="fill()" class="btn btn-primary float-right">Submit</button> -->
                    <button type="submit" class="btn btn-primary float-right" id="submit" onclick="fill()">Submit</button>
                  </div>
                </div>

            </div>
          </div>
        </div>
        <div class="scam1">
            <div class="confirm position-relative">
                <div class="col-md-5 offset-md-3 mr-3 mt-3 ">
                 <div class="card shadow-sm">
                    <div class="card-header shadow-sm bg-light">
                       <h5 class="font-weight-bold">Confirm Your Slot</h5>
                    </div>
                    <div class="card-body">
                       <form action="#">
                          <div class="row">
                             <div class="col-md-10">
                                 
                               <h4 class="font-weight-bold">Date: </h4><input class="d"   disabled="disabled" id="demo" required>    
                                                     
                               
                                   <h4 class="font-weight-bold">Time:</h4> <input id="demo1" >
                               
                               <div class="sl">
                               <button  type="button" id ="myBt" class="btn btn-primary" onclick="userValid()"> Confirm</button>
                                 
                               </div>
                                 </div>
                                   </div>
                                   </div>
                                   
                                  
                                  
                               </div>
                               </div>
                                
                             <br>
                              
                              
                                             
                                             <br><br>
                                             
                                             </div>


<style>
  .scam1{
    width: 1200px;
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

    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 1;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      text-align: center;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.4);
      /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
      position: relative;
      background-color: #fefefe;
      margin: auto;
      padding: 0;
      text-align: center;
      border: 1px solid #888;
      width: 25%;
      height: 28%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    @keyframes animatetop {
      from {
        top: -300px;
        opacity: 0
      }

      to {
        top: 0;
        opacity: 1
      }
    }

    /* The Close Button */
    .close {
      color: white;
      text-align: center;
      font-size: 28px;
      font-weight: bold;

    }

    .close h2 {

      position: relative;
    }

    .modal-header h2 {
      text-align: center;

    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

    .modal-header {
      padding: 2px 16px;
      background-color: white;
      color: white;
      text-align: center;
    }

    .modal-body {
      padding: 10px 10px;
      text-align: center;
    }


    * {
      font-family: sans-serif;
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
      font-family: Arial, Helvetica, sans-serif;
    }

    .parent {
      width: 850px;
      height: 600px;
      left: 600px;
      top: 48px;
    }

    code {
      text-align: left;
    }

    .container {
      position: absolute;
      right: 600px;
    }

    #myDIV {
      display: none;
    }

    #myDIV1 {
      display: none;
    }

    #myDIV2 {
      display: none;
    }

    .container1 {
      width: 200px;
    }

    .d {
      position: relative;
      bottom: 34px;
      left: 65px;
      color: #616161;
    }

    .s {
      position: relative;
      bottom: 34px;
      left: 65px;
      color: #616161;
    }

    .l {
      position: relative;
      bottom: 34px;
      left: 115px;
    }

    .sl {
      position: relative;
      bottom: 15px;
    }

    .scam {
      position: absolute;
      width: 750px;
      right: 895px;
      top: 500px;
    }

    .c {
      position: relative;
      top: 400px;
      left: 500px;
      width: 500px;
    }

    .qrResult {
      position: absolute;

      top: 790px;
      left: 800px;
    }

    .hide {
      display: none;
    }

    @media only screen and (min-device-width:370px) and (max-device-width:460px) {
      .navbar {
        width: 100%;
      }

      .hide {
        display: block;
      }

      .container {
        position: absolute;
        left: 1px;
      }

      .parent {
        position: absolute;
        left: 05px;
        width: 405px;
        top: 480px;
        height: 1100px;
      }

      .btnn {
        position: absolute;
        left: 180px;
      }

      .btnn1 {
        position: relative;
        right: 10px;
        margin-left: 1px;
      }

      .btnn2 {
        position: relative;
        left: 40px;
        bottom: 1px;
        margin-left: 10px;
      }

      .btnn3 {
        position: absolute;
        left: 180px;
        top: 190px;
      }

      .btnn4 {
        position: absolute;
        top: 400px;
        left: 200px;
      }

      .btnn5 {
        position: absolute;
        margin-right: 100px;
        top: 295px;
        left: 180px;
      }

      .btnn6 {
        position: absolute;
        left: 180px;
      }

      .scam {
        position: relative;
        left: 1px;
        top: 420px;
        width: 380px;
        margin-top: 20px;
        margin-bottom: 100px;
        :

      }

      .modal {
        width: 100%;

      }

      .modal-content {
        width: 250px;
      }

      .dropdown-content {
        position: absolute;
        right: 12px;
      }

      .btnn7 {
        position: absolute;
        top: 190px;
        left: 180px;
      }

      .btnn8 {
        position: absolute;
        top: 300px;
        left: 160px;
      }

      .btnn9 {
        position: absolute;
        top: 400px;
        left: 160px;
      }



    }

    @media only screen and (min-device-width:300px) and (max-device-width:370px) {
      .navbar {
        width: 100%;
      }

      .hide {
        display: block;
      }

      .container {
        position: absolute;
        left: 1px;
      }

      .parent {
        position: absolute;
        left: 15px;
        width: 335px;
        top: 480px;
        height: 1850px;
      }

      .btnn1 {
        position: relative;
        right: 20px;
        margin-left: 1px;
      }

      .btnn2 {
        position: relative;
        left: 150px;
        bottom: 36px;
        margin-left: 40px;
      }

      .btc {
        position: absolute;
        left: 60px;
      }

      .btnn3 {
        position: absolute;
        left: 10px;
        top: 750px;
      }

      .scam {
        position: relative;
        left: 1px;
        top: 440px;
        width: 300px;
        margin-top: 60px;

      }

      .modal {
        width: 100%;

      }

      .modal-content {
        width: 250px;
        height: 180px;
      }

      .dropdown-content {
        position: absolute;
        right: 12px;
      }

      .btnn6 {
        position: absolute;
        top: 650px;
        left: 20px;

      }

      .btnn {
        position: absolute;
        top: 550px;
        left: 20px;

      }

      .btnn5 {
        position: absolute;
        top: 450px;
        left: 20px;
      }

      .btnn7 {
        position: absolute;
        top: 750px;
        left: 20px;
      }




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
     $(function() {
      var enableDays = ['2020-04-19', '2020-04-20', '2020-04-21', '2020-04-22', '2020-04-23', '2020-04-24', '2020-04-25', '2020-04-26'];
      var disabledDays = [1, 3];

      function formatDate(d) {
        var day = String(d.getDate())
        //add leading zero if day is is single digit

        if (day.length == 1)
          day = '0' + day
        var month = String((d.getMonth() + 1))
        //add leading zero if month is is single digit
        if (month.length == 1)
          month = '0' + month
        return d.getFullYear() + '-' + month + "-" + day;
      }

      $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        beforeShowDay: function(date) {
          var dayNr = date.getDay();
          if (dayNr == 0 || dayNr == 1 || dayNr == 2 || dayNr == 3 || dayNr == 4 || dayNr == 5 || dayNr == 6) {
            if (enableDays.indexOf(formatDate(date)) >= 0) {
              return true;
            }
            return false;
          }
          if (disabledDays.indexOf(formatDate(date)) >= 0) {
            return false;
          }
          return true;
        }
      });
    });
     function fill(){
                  if(document.getElementById('date').value != 0){
                    document.getElementById('demo1').value=document.getElementById('date').value;
                   }
                 }
     
  </script>
  </body>