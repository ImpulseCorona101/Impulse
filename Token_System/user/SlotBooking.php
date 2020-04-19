<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                   $p = 1;
                                   if ($count > 0) {
                                        while ($rows = mysqli_fetch_array($run_shop)) {

                                             $startTime = $rows['startTime'];
                                             $endTime = $rows['endTime'];
                                             $id = $rows['id'];
                                             $interval = $rows['Slot-Interval'];
                                             $customers = $rows['Slot-User'];



                                             $start_time = $startTime;
                                             $end_time = $endTime;


                                             //splitting start time hours and minute
                                             $starttimehour = substr($start_time, 0, 2);
                                             $starttimemin = substr($start_time, 3);

                                             //splitting end time hours and minute
                                             $endtimehour = substr($end_time, 0, 2);
                                             $endtimemin = substr($end_time, 3);

                                             //making minute to point value 
                                             $start_time_end_point = (int) $starttimemin / 60;
                                             $end_time_end_point = (int) $endtimemin / 60;

                                             //concatenating minute point value with hour value
                                             $start_time_pt = (float) $starttimehour + $start_time_end_point;
                                             $end_time_pt = (float) $endtimehour + $end_time_end_point;

                                             //converting minute interval to point wise interval for eg 30 mins to 0.5
                                             $interval_pt = $interval / 60;

                                             //initialize 
                                             $count = 0;
                                             $temp = $start_time_pt;
                                             $interval_list_point = array();

                                             while ($temp <= $end_time_pt) {
                                                  array_push($interval_list_point, $temp);
                                                  $temp = $temp + $interval_pt;
                                                  $count = $count + 1;
                                             }

                                             //making intervals timings in hr min
                                             $interval_list = array();
                                             for ($j = 0; $j < count($interval_list_point); $j++) {
                                                  $l = strval((int) ($interval_list_point[$j])) . ":" . strval((int) (abs($interval_list_point[$j] - (int) ($interval_list_point[$j])) * 60));
                                                  $last = $l;
                                                  array_push($interval_list, $l);
                                             }

                                             //for last remaining time slot ...if time slot remains
                                             if ((int) substr($last, 3) < (int) $endtimemin) {
                                                  $remain = (int) $endtimemin - (int) substr($last, 3);
                                                  $last_time = substr($last, 0, 2) . ":" . strval((int) substr($last, 3) + $remain);
                                                  array_push($interval_list, $last_time);
                                             }

                                             //making time intervals
                                             $final_intervals = array();
                                             for ($k = 0; $k < count($interval_list) - 1; $k++) {
                                                  $m = strval($interval_list[$k]) . " - " . strval($interval_list[$k + 1]);
                                                  array_push($final_intervals, $m);
                                                  // echo "<br>";
                                                  // echo $m;

                                                  echo "
                                                       <input class='checkbox-tools' type='radio' name='time' id='tool-$p' checked value=$m>
                                                       <label class='for-checkbox-tools' for='tool-$p'>$m</label>
                                             ";
                                                  $p++;
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


     $check = "select * from slot where date='$date' and slot='$time'";
     $run_check = mysqli_query($con, $check);
     $count = mysqli_num_rows($run_check);
     if ($count > 0) {
          while ($rows = mysqli_fetch_array($run_check)) {
               $vacancy = $rows['vacancy'];
          }
          $passcode = rand(10000, 99999);
          if ($vacancy != 0) {
               $vacancy = $vacancy - 1;
               $update_query = "update slot set vacancy=$vacancy where date= '$date' and slot='$time' ";
               $run_update = mysqli_query($con, $update_query);

               $add_slot = "insert into slot (shop_id,slot,vacancy,date,phonenumber,passcode) values ('$id','$time','$vacancy','$date','41151',$passcode)";
               $run = mysqli_query($con, $add_slot);
          } else {
               echo "<script>alert('The Slot is already full ! , Please Choose Another one')</script>";
          }
     } else {
          $passcode = rand(10000, 99999);
          $add_slot = "insert into slot (shop_id,slot,vacancy,date,phonenumber,passcode) values ('$id','$time','$customers','$date','1234567890',$passcode)";
          $run = mysqli_query($con, $add_slot);
          echo $add_slot;
          if ($run) {
               echo "<script>window.alert('Success');</script>";
          }
     }
}
?>