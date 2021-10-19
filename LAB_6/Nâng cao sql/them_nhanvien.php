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

if (isset($_POST['HOTEN']))
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["ANH"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["ANH"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES["ANH"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["ANH"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["ANH"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

if ($_FILES["ANH"]) {
    echo "<br>Định dạng ảnh là  $imageFileType<br>";
    echo "<br>Dung lượng ảnh là <br>";
    echo $_FILES["ANH"]["size"]."<br>";
    $ANH = basename($_FILES["ANH"]["name"]);
} else $ANH = "";




if (isset($_POST['MALOAINV'])) $MALOAINV = $_POST['MALOAINV']; else $MALOAINV = "2";
if (isset($_POST['MAPHONG'])) $MAPHONG = $_POST['MAPHONG']; else $MAPHONG = "2";

if (isset($_POST['HOTEN'])) {
    $sql = "INSERT INTO `nhanvien` (`MANV`, `HOTEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`) VALUES (NULL,'$HOTEN','$NGAYSINH','$GIOITINH', '$DIACHI','$ANH','$MALOAINV','$MAPHONG')";

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


<form method="post"  enctype="multipart/form-data">
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
                <input type="file" name="ANH"  accept="image/*" />
              
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
