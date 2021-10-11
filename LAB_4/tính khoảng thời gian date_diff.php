<?php
$datetime1 = date_create('1975-04-30');
$datetime2 = date_create('2017-04-15');
$interval = date_diff($datetime1, $datetime2);
echo $interval->format('%R%y years %R%d days');

?>