<?php
include('connect.php');
session_start();
// Check user login or not
if (isset($_SESSION['uname'])) echo 'Bạn đã đăng nhập với tên tài khoản'.$_SESSION['uname'];
else header('Location: login.php');




$id=$_GET['id'];
//$sql="DELETE FROM nhanvien WHERE id='$id' ";
$sql="DELETE FROM `phongban` WHERE `phongban`.`MAPHONG` = $id";
mysqli_query($conn,$sql);
header("location:index_phongban.php");
?>