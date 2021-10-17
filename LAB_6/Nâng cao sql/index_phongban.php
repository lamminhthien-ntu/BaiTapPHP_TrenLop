<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>danh sach</title>
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
?>
<form method="post" action="logout.php">
    <input type="submit" value="Đăng xuất" >
</form>


<div class="container">
    <div class="row">
        <h2 class="text-center" style="color: blue;">Danh sách phòng ban</h2>
        <button type="button" class="btn btn-default btn-lg"><a href="them.php">Thêm phòng ban</a></button>
        <form action="index_phongban.php" method="get">
            <input name="keyword" placeholder="" value="">
            <input type="submit" value="Tìm phòng ban">
        </form>
        <table class="table">
            <thead>
            <tr>

                <th>Mã Phòng</th>
                <th>Tên Phòng</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                $row_sql="SELECT * FROM `phongban` ORDER BY `phongban`.`TENPHONG` ASC";
                if (!empty($_GET['keyword']))
                {
                    $search = $_GET['keyword'];
                    $row_sql = "SELECT * FROM `phongban` ORDER BY `phongban`.`TENPHONG` ASC where TENPHONG like '%$search%'";
                }
                $row_thuchien=mysqli_query($conn,$row_sql);
                //                        var_dump(mysqli_fetch_array($row_thuchien));
                while($dulieu =mysqli_fetch_array($row_thuchien)){
                ?>
                <td><?php echo $dulieu['MAPHONG']; ?></td>
                <td><?php echo $dulieu['TENPHONG']; ?> </td>
                <td>
                    <a onclick=" return confirm('bạn có chắc muốn sửa không')" href="sua.php?id=<?php echo $dulieu['id'] ?>" title="sửa"><img src="images/edit.png" width="25px">
                    </a>
                </td>
                <td>
                    <a onclick=" return confirm('bạn có chắc muốn xóa không') " href="xoa.php?id=<?php echo $dulieu['id']; ?>" ><img src='images/delete.jpg' width='25px' >
                    </a>
                </td>
            </tr>
            <?php 	} ?>
            </tbody>
        </table>
    </div>
</div>


</body>
</html>