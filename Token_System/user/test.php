<?php
$con = mysqli_connect("localhost", "root", "", "impulse");

if (mysqli_connect_errno()) {
     echo "Failed to connect to MySql " . mysqli_connect_error();
}


$search_query = 421202;
// echo $search_query;

$get_shop = "select * from shopkeeper where pincode = $search_query";
$run_shop = mysqli_query($con, $get_shop);
$count = mysqli_num_rows($run_shop);
if ($count > 0) {
     while ($rows = mysqli_fetch_array($run_shop)) {
          $name = $rows['name'];
          $shopAddress = $rows['shopAddress'];
          $phone = $rows['phone'];
          $startTime = $rows['startTime'];
          $endTime = $rows['endTime'];

          $starttimehour = substr($startTime, 0, 2);
          $starttimemin = substr($startTime, 3);

          $endtimehour = substr($endTime, 0, 2);
          $endtimemin = substr($endTime, 3);

          $TempEndTime = $endTime;
          $TempStartTime = $startTime;
          while ((int) $starttimehour <= (int) $endtimehour && (int) $starttimemin <= (int) $endtimemin) {
               echo strval($starttimehour) . ":" . strval($starttimemin);
               echo "<br>";
               $starttimemin = (int) $starttimemin + 30;
               if ($starttimemin == 60) {
                    $starttimemin = 00;
                    $starttimehour = $starttimehour + 1;
               }
          }

          // echo " <div>    
          //           <h1>$name</h1>
          //           <h5>$shopAddress</h5>
          //           <h6>$phone</h6>
          //           <h5>$startTime</h5>
          //           <h6>$endTime</h6>
          //           <h1>$starttimehour</h1>
          //           <h1>$starttimemin</h1>
          //      </div> ";
     }
}
