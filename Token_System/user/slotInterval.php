<?php 
$start_time = "10:00";
$end_time = "12:30";
$interval = 45; 

//splitting start time hours and minute
$starttimehour = substr($start_time, 0, 2);
$starttimemin = substr($start_time, 3);

//splitting end time hours and minute
$endtimehour = substr($end_time, 0, 2);
$endtimemin = substr($end_time, 3);

//making minute to point value 
$start_time_end_point = (int) $starttimemin/60;
$end_time_end_point = (int) $endtimemin/60;

//concatenating minute point value with hour value
$start_time_pt = (float)$starttimehour + $start_time_end_point;
$end_time_pt = (float)$endtimehour + $end_time_end_point;

//converting minute interval to point wise interval for eg 30 mins to 0.5
$interval_pt = $interval/60;

//initialize 
$count = 0;
$temp = $start_time_pt;
$interval_list_point = array();

while($temp <= $end_time_pt){
    array_push($interval_list_point,$temp);
    $temp = $temp + $interval_pt;
    $count = $count + 1;
}

//making intervals timings in hr min
$interval_list = array();
for($j = 0; $j < count($interval_list_point) ; $j++){
    $l = strval((int)($interval_list_point[$j])).":".strval((int)(abs($interval_list_point[$j] - (int)($interval_list_point[$j]))*60));
    $last = $l;
    array_push($interval_list,$l);
}

//for last remaining time slot ...if time slot remains
if((int)substr($last, 3) < (int)$endtimemin){
    $remain = (int)$endtimemin - (int)substr($last, 3);
    $last_time = substr($last, 0, 2).":".strval((int)substr($last, 3) + $remain);
    array_push($interval_list,$last_time);
}

//making time intervals
$final_intervals = array();
for($k = 0; $k < count($interval_list)-1 ; $k++){
    $m = strval($interval_list[$k])." - ".strval($interval_list[$k+1]);
    array_push($final_intervals,$m);
    echo "<br>";
    echo $m;
}
