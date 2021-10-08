<?php
session_start();// Bật session đã có từ trước, từ file session_learn1.php

//Chú ý phải chạy session_learn1.php để tạo session có màu green trước , thì nó sẽ lưu suốt trong
//localhost
echo $_SESSION['tomau_session'];

unset($_SESSION['tomau_session']);
//session_destroy();
?>