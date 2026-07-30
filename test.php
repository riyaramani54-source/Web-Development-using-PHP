<?php

date_default_timezone_set("Asia/Kolkata");
$date1 = date('d-M-y : H-i-s');
echo $date1;

$date_1 = new DateTime('2026-7-7');
$date_2 = new DateTime('2021-7-7');

$final_date = date_diff($date_1,$date_2);
echo $final_date->format('%y');
?>