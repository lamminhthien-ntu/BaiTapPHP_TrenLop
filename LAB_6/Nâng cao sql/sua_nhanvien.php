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
if (isset($_SESSION['uname'])) echo 'Bạn đã đăng nhập với tên tài khoản' . $_SESSION['uname'];
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

if ($_FILES["ANH"]) $ANH = basename($_FILES["ANH"]["name"]); else $ANH = "";


if (isset($_POST['MALOAINV'])) $MALOAINV = $_POST['MALOAINV']; else $MALOAINV = "2";
if (isset($_POST['MAPHONG'])) $MAPHONG = $_POST['MAPHONG']; else $MAPHONG = "2";

$id = $_GET['id'];
$row_sql = "SELECT * FROM `nhanvien` WHERE `nhanvien`.`MANV` = $id";
$row_thucthi = mysqli_query($conn, $row_sql);
$row_dulieu = mysqli_fetch_array($row_thucthi);


if (isset($_POST['HOTEN'])) {
//    $sql = "INSERT INTO `nhanvien` (`MANV`, `HOTEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`) VALUES (NULL,'$HOTEN','$NGAYSINH','$GIOITINH', '$DIACHI','$ANH','$MALOAINV','$MAPHONG')";

    $sql = "UPDATE `nhanvien` SET `HOTEN` = '$HOTEN', `NGAYSINH` ='$NGAYSINH', `GIOITINH` = '$GIOITINH', `DIACHI` = '$DIACHI', `ANH` = '$ANH', `MALOAINV` = '$MALOAINV', `MAPHONG` = '$MAPHONG' WHERE `nhanvien`.`MANV` = '$id';";

    if (mysqli_query($conn, $sql)) {
        echo "Đã cập nhật thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<form method="post" action="logout.php">
    <input type="submit" value="Đăng xuất">
</form>


<form method="post">
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>Họ tên</td>
            <td>
                <input type="text" name="HOTEN" value="<?php echo $row_dulieu['HOTEN']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Ngày sinh</td>
            <td>
                <input type="text" name="NGAYSINH" value="<?php echo $row_dulieu['NGAYSINH']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Giới tính</td>
            <td>

                Nam <input type="radio" name="GIOITINH" value="0"
                    <?php
                    if ($row_dulieu['GIOITINH'] == 0) echo "checked";
                    ?>
                />
                Nữ <input type="radio" name="GIOITINH" value="1"
                    <?php
                    if ($row_dulieu['GIOITINH'] == 1) echo "checked";
                    ?>
                />
            </td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td>
                <input type="text" name="DIACHI" value="<?php echo $row_dulieu['DIACHI']; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Ảnh
                <input type="file" name="ANH"  accept="image/*" />
            </td>

            <td><img src="<?php echo 'uploads/'.$row_dulieu['ANH']; ?>" alt="Avatar" class="avatar"></td>
        </tr>
        <tr>
            <td>Mã loại nhân viên</td>
            <td>
                <!--                <input type="text" name="MALOAINHANVIEN" />-->

                <select name="MALOAINHANVIEN">
                    <?php
                    $row_sql = "SELECT * FROM loainv";
                    $row_thuchien = mysqli_query($conn, $row_sql);
                    while ($dulieu = mysqli_fetch_array($row_thuchien)) {
                        $value = $dulieu['MALOAINV'];
                        $name = $dulieu['TENLOAINV'];
                        ?>
                        <?php
                        //Kiểm tra xem cái nào đã được check từ trước
                        if ($row_dulieu['MALOAINV'] == $dulieu['MALOAINV'])
                            echo "<option value='$value' selected>$name</option>";
                        else
                            echo "<option value='$value'>$name</option>";
                    }
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
                    $row_thuchien = mysqli_query($conn, $row_sql);
                    while ($dulieu = mysqli_fetch_array($row_thuchien)) {
                        $value = $dulieu['MAPHONG'];
                        $name = $dulieu['TENPHONG'];
                        ?>
                        <?php
                        //Kiểm tra xem cái nào đã được check từ trước
                        if ($row_dulieu['MAPHONG'] == $dulieu['MAPHONG'])
                            echo "<option value='$value' selected>$name</option>";
                        else
                            echo "<option value='$value'>$name</option>";
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Cập nhật"/></td>
        </tr>
    </table>
</form>

</body>
</html>
