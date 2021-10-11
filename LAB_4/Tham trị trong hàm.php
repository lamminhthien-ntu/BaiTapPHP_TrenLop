<?php
$b = 10;
function binhphuong(&$b)
{
    $b *= $b;
}
binhphuong($b); //100
echo $b; //100