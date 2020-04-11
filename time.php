<META HTTP-EQUIV="refresh" CONTENT="1">
<?php
$hour = date("G");
$mins = floor(date("i"));
$time_explode_hours = 15;
$time_explode_mins = 50;
$time_left_hours = $time_explode_hours-$hour;
$time_left_mins = $time_explode_mints-$mins;
if($time_left_mins < 0){
$time_left_hours--;
$time_left_mins = $time_left_mins +60;
}

echo "Payment Expires in ".$time_left_hours." hours and ".$time_left_mins." minutes!";
?>