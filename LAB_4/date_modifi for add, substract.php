<?php


$date = date_create();
echo date_format($date, 'd-m-Y'). "<br />";
date_modify($date, '+41 day');
echo date_format($date, 'd-m-Y');


?>
