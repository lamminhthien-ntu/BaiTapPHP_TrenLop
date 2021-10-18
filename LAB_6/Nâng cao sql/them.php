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
if (isset($_POST['HOTEN'])) $HOTEN = ($_POST['HOTEN']); else $HOTEN = "";
if (isset($_POST['NGAYSINH'])) $NGAYSINH = $_POST['NGAYSINH']; else $NGAYSINH = "";
if (isset($_POST['GIOITINH'])) $GIOITINH = $_POST['GIOITINH']; else $GIOITINH = "";
if (isset($_POST['DIACHI'])) $DIACHI = strval($_POST['DIACHI']); else $DIACHI = "";
if (isset($_POST['ANH'])) $ANH = $_POST['ANH']; else $ANH = "";
if (isset($_POST['MALOAINV'])) $MALOAINV = $_POST['MALOAINV']; else $MALOAINV = "2";
if (isset($_POST['MAPHONG'])) $MAPHONG = $_POST['MAPHONG']; else $MAPHONG = "2";

if (isset($_POST['HOTEN'])) {
    $sql = "INSERT INTO `nhanvien` (`MANV`, `HOTEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`) VALUES (NULL,'$HOTEN','$NGAYSINH','$GIOITINH', '$DIACHI','$ANH','$MALOAINV','$MAPHONG')";

    if (mysqli_query($conn, $sql)) {
        var_dump(mysqli_query($conn, $sql));
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
            <td>Họ tên</td>
            <td>
                <input type="text" name="HOTEN" />
            </td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td>
                <input type="text" name="NGAYSINH" />
            </td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td>
                Nam <input type="radio" name="GIOITINH" value="0" />
                Nữ <input type="radio" name="GIOITINH" value="1" />
            </td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td>
                <input type="text" name="DIACHI" />
            </td>
        </tr>
        <tr>
            <td>Ảnh</td>
            <td>
                <input type="text" name="ANH" />
            </td>
        </tr>
        <tr>
            <td>Mã loại nhân viên</td>
            <td>
<!--                <input type="text" name="MALOAINHANVIEN" />-->

                <select name="MALOAINHANVIEN">
                    <?php
                        $row_sql = "SELECT * FROM loainv";
                        $row_thuchien=mysqli_query($conn,$row_sql);
                        while($dulieu =mysqli_fetch_array($row_thuchien)){
                            $value = $dulieu['MALOAINV'];
                            $name = $dulieu['TENLOAINV'];
                    ?>
                    <?php
                        echo  "<option value='$value'>$name</option>"; }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Mã Phòng</td>
            <td>
<!--                <input type="text" name="MAPHONG" />-->
                <select name="MAPHONG">
                    <?php
                    $row_sql = "SELECT * FROM phongban";
                    $row_thuchien=mysqli_query($conn,$row_sql);
                    while($dulieu =mysqli_fetch_array($row_thuchien)){
                        $value = $dulieu['MAPHONG'];
                        $name = $dulieu['TENPHONG'];
                        ?>
                        <?php
                        echo  "<option value='$value'>$name</option>"; }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Thêm" /></td>
        </tr>
    </table>
</form>

</body>
</html>
