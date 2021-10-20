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
if (isset($_SESSION['uname']))
{
    $uname= 'Chào '.$_SESSION['uname'];
    if((time() - $_SESSION['last_login_timestamp']) > 900) // 900 = 15 * 60
    {
        header("location:logout.php");
    }
    else
    {
        $_SESSION['last_login_timestamp'] = time();
    }

}
else header('Location: login.php');

?>

<?php
// determine which page number visitor is currently on
//Xác định số của trang hiện tại mà mình đang xem
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
?>
<form method="post" action="logout.php">
    <input   value="<?php echo $uname;?>" disabled>
    <input type="submit" value="Đăng xuất" >
</form>




<div class="container">
    <div class="row">
        <h2 class="text-center" style="color: blue;">Danh sách loại nhân viên</h2>
        <button type="button" class="btn btn-default btn-lg"><a href="them_loainv.php">Thêm loại nhân viên</a></button>
        <form action="index_loainv.php" method="get">
            <input name="keyword" placeholder="" value="">
            <input type="submit" value="Tìm loại nhân viên">
        </form>
        <table class="table">
            <thead>
            <tr>

                <th>Mã loại nhân viên</th>
                <th>Tên loại nhân viên</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                $row_sql = "SELECT * FROM loainv";
                if (!empty($_GET['keyword']))
                    {
                        $search = $_GET['keyword'];
                         $row_sql = "select * from loainv where tenloainv like '%$search%'";
                    }

                $row_thuchien=mysqli_query($conn,$row_sql);
                //                        var_dump(mysqli_fetch_array($row_thuchien));
                while($dulieu =mysqli_fetch_array($row_thuchien)){
                ?>
                <td><?php echo $dulieu['MALOAINV']; ?></td>
                <td><?php echo $dulieu['TENLOAINV']; ?> </td>
                <td>
                    <a onclick=" return confirm('bạn có chắc muốn sửa không')" href="sua_nhanvien.php?id=<?php echo $dulieu['id'] ?>" title="sửa"><img src="icon/edit.png" width="25px">
                    </a>
                </td>
                <td>
                    <a onclick=" return confirm('bạn có chắc muốn xóa không') " href="xoa_loainv.php?id=<?php echo $dulieu['MALOAINV']; ?>" ><img src='icon/delete.jpg' width='25px' >
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