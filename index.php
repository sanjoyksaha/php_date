<?php

require 'Date.php';


//date_default_timezone_set('Asia/Dhaka');
//echo date_default_timezone_get();
$date = new Date();
echo $date->Now();
echo '<br>';
echo cal_days_in_month(CAL_GREGORIAN, 8, 2009);
//echo Date::Day();
echo '<br>';
print_r($date->MonthlyDates(3));

