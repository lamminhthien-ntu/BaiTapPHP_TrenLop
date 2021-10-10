<?php
$startTime = date("Y-m-d H:i:s");//khởi tạo
//Hiện thị ngày giờ khởi tạo
echo 'Khới tạo ngày: '.$startTime;


//cộng thêm 1 giờ
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+1 hour',strtotime($startTime)));

//Hiện thị ngày giờ sau khi cộng 1 giờ
echo 'Ngày sau khi cộng 1 giờ: '.$cenvertedTime;

//công 1 giờ và 30 phút
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+1 hour +30 minutes',
    strtotime($startTime)));


//Cộng 1 giờ 30 phút và 45 giây
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+1 hour +30 minutes +45 seconds',
    strtotime($startTime)));

//Hiện thị thời gian
echo 'Thời gian sau khi cộng: '.$cenvertedTime;




?>