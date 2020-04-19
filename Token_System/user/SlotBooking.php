<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <title>Slot Booking</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
     <a href="https://icons8.com/icon/83325/roman-soldier"></a>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

     <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
     <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

     <!-- Bootstrap Date-Picker Plugin -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />

     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>


     <style>
          @import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=devanagari,latin-ext');


          :root {
               --white: #ffffff;
               --light: #f0eff3;
               --black: #000000;
               --dark-blue: #1f2029;
               --dark-light: #353746;
               --red: #da2c4d;
               --yellow: #f8ab37;
               --grey: #ecedf3;
          }

          body {
               width: 100%;
               /* background: var(--dark-blue); */
               overflow-x: hidden;
               font-family: 'Poppins', sans-serif;
               font-size: 17px;
               line-height: 30px;
               -webkit-transition: all 300ms linear;
               transition: all 300ms linear;
          }

          p {
               font-family: 'Poppins', sans-serif;
               font-size: 17px;
               line-height: 30px;
               color: var(--white);
               letter-spacing: 1px;
               font-weight: 500;
               -webkit-transition: all 300ms linear;
               transition: all 300ms linear;
          }


          .section {
               position: relative;
               width: 100%;
               display: block;
               text-align: center;
               margin: 0 auto;
          }

          .over-hide {
               overflow: hidden;
          }

          .z-bigger {
               z-index: 100 !important;
          }




          .checkbox:checked~.background-color {
               background-color: var(--white);
          }


          [type="checkbox"]:checked,
          [type="checkbox"]:not(:checked),
          [type="radio"]:checked,
          [type="radio"]:not(:checked) {
               position: absolute;
               left: -9999px;
               width: 0;
               height: 0;
               visibility: hidden;
          }



          .checkbox-tools:checked+label,
          .checkbox-tools:not(:checked)+label {
               position: relative;
               display: inline-block;
               padding: 20px;
               width: 130px;
               font-size: 14px;
               line-height: 20px;
               letter-spacing: 1px;
               margin: 0 auto;
               margin-left: 5px;
               margin-right: 5px;
               margin-bottom: 10px;
               text-align: center;
               border-radius: 4px;
               overflow: hidden;
               cursor: pointer;
               text-transform: uppercase;
               color: var(--white);
               -webkit-transition: all 300ms linear;
               transition: all 300ms linear;
          }

          .checkbox-tools:not(:checked)+label {
               background-color: var(--dark-light);
               box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
          }

          .checkbox-tools:checked+label {
               background-color: transparent;
               box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
          }

          .checkbox-tools:not(:checked)+label:hover {
               box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
          }

          .checkbox-tools:checked+label::before,
          .checkbox-tools:not(:checked)+label::before {
               position: absolute;
               content: '';
               top: 0;
               left: 0;
               width: 100%;
               height: 100%;
               border-radius: 4px;
               background-image: linear-gradient(298deg, var(--red), var(--yellow));
               z-index: -1;
          }


          .checkbox:checked~.section .container .row .col-12 .checkbox-tools:not(:checked)+label {
               background-color: var(--light);
               color: var(--dark-blue);
               box-shadow: 0 1x 4px 0 rgba(0, 0, 0, 0.05);
          }

          .form-actions {
               margin: 0;
               background-color: transparent;
               text-align: center;
          }
     </style>
     <script>
          $(document).ready(function() {
               var date_input = $('input[name="date"]'); //our date input has the name "date"
               var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
               var options = {
                    format: 'dd/mm/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
               };
               date_input.datepicker(options);
          })
     </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../../index.php">Impulse</a>


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
                <!--<a href="user_signin">Logout</a>
                <div class="hide">
                    <a href="../../index.php">Home</a>
                    <a href="../../Coronavirus/CurrentStats.html">Covid-19 Status</a>
                    <a href="../../AgroCraft/index.html">Agrocraft</a>
                    <a href="Contact.html">Contact Us</a>
                    <div>

                    </div>-->
                </div>
            </div>
        </div>

    </nav>
     <script type="text/javascript">
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
     <style type="text/css">
          <style>
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
     </style>
     <form method="post">
          <div class="section over-hide z-bigger">
               <input class="checkbox" type="checkbox" name="general" id="general">
               <label class="for-checkbox" for="general"></label>
               <div class="background-color"></div>
               <div class="section over-hide z-bigger">
                    <div class="container pb-5">
                         <div class="row justify-content-center pb-5">

                              <div class="form-group">
                                   <label class="control-label form-weight-bold " for="date">Enter Your Date</label>
                                   <input class="form-control" id="date" name="date" placeholder="DD/MM/YYY" type="text" />
                              </div>
                              <div class="col-12 pb-5">
                                   <br>
                                   <h3>Select Your Slot</h3>
                                   <br>
                                   <?php
                                   $con = mysqli_connect("localhost", "root", "", "impulse");

                                   if (mysqli_connect_errno()) {
                                        echo "Failed to connect to MySql " . mysqli_connect_error();
                                   }


                                   $pincode = 421202;

                                   $get_shop = "select * from shopkeeper where pincode = $pincode";
                                   $run_shop = mysqli_query($con, $get_shop);
                                   $count = mysqli_num_rows($run_shop);
                                   if ($count > 0) {
                                        while ($rows = mysqli_fetch_array($run_shop)) {

                                             $startTime = $rows['startTime'];
                                             $endTime = $rows['endTime'];
                                             $id = $rows['id'];
                                             $interval = $rows['Slot-Interval'];
                                             $customers = $rows['Slot-User'];


                                             $starttimehour = substr($startTime, 0, 2);
                                             $starttimemin = substr($startTime, 3);

                                             $endtimehour = substr($endTime, 0, 2);
                                             $endtimemin = substr($endTime, 3);

                                             $TempEndTime = $endTime;
                                             $TempStartTime = $startTime;
                                             $i = 1;
                                             while ((int) $starttimehour <= (int) $endtimehour && (int) $starttimemin <= (int) $endtimemin) {


                                                  $endtimehour1 = (int) $starttimehour;
                                                  $endtimemin1 = (int) $starttimemin + (int) $interval;
                                                  if ($endtimemin1 == 60) {
                                                       $endtimemin1 = 00;

                                                       $endtimehour1 = $endtimehour1 + 1;
                                                  }


                                                  $a = strval($starttimehour) . ":" . strval($starttimemin) . "-" . strval($endtimehour1) . ":" . strval($endtimemin1);


                                                  echo "
                                                       <input class='checkbox-tools' type='radio' name='time' id='tool-$i' checked value=$a>
                                                       <label class='for-checkbox-tools' for='tool-$i'>$a</label>
                                             ";


                                                  $starttimemin = (int) $starttimemin + (int) $interval;
                                                  $endtimehour1 = (int) $endtimehour;
                                                  $i = $i + 1;

                                                  if ($starttimemin == 60) {
                                                       $starttimemin = 00;

                                                       $starttimehour = $starttimehour + 1;
                                                  }
                                             }
                                        }
                                   }

                                   ?>

                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="form-group form-actions">
               <button class="btn btn-primary btn-lg " name="submit" type="submit">Submit</button>
          </div>
     </form>


</body>

</html>

<?php
if (isset($_POST['submit'])) {
     $date = $_POST['date'];
     $time = $_POST['time'];
     echo "Date " . $date;
     echo "<br>";
     echo "Time : " . $time;
     echo "<br>" . $interval;

     $add_slot = "insert into slot (shop_id,slot,vacancy) values ('$id','$time','$customers')";
     $run = mysqli_query($con, $add_slot);
}
?>