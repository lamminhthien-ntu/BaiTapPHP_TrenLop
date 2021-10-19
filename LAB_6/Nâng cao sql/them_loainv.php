<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>them</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css">
	<script src="vendor/bootstrap.min.js"></script>
</head>
<body>

<?php
include('connect.php');
include('header.php');
session_start();
?>

<?php
if (isset($_SESSION['uname'])) echo 'Bạn đã đăng nhập với tên tài khoản'.$_SESSION['uname'];
else header('Location: login.php');
if (isset($_POST['TENLOAINV'])) $TENLOAINV = ($_POST['TENLOAINV']); else $TENLOAINV = "";


if (isset($_POST['TENLOAINV'])) {
    $sql = "INSERT INTO `loainv` (`MALOAINV`, `TENLOAINV`) VALUES (NULL, '$TENLOAINV');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<form method="post" action="logout.php">
    <input type="submit" value="Đăng xuất" >
</form>


<form method="post">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>Loại nhân viên</td>
            <td>
                <input type="text" name="TENLOAINV" />
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Thêm" /></td>
        </tr>
    </table>
</form>

</body>
</html>
