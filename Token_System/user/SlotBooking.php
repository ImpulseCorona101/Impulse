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
                                   if ($count > 0) {
                                        while ($rows = mysqli_fetch_array($run_shop)) {

                                             $startTime = $rows['startTime'];
                                             $endTime = $rows['endTime'];
                                             $id = $rows['id'];
                                             
                                             // $interval = $rows['Slot-Interval'];
                                             // $customers = $rows['Slot-User'];
                                             $interval=45;
                                             $customers=5;


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