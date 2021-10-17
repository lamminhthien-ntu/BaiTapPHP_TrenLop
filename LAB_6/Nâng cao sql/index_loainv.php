<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>danh sach</title>
</head>
<body>


<?php
include('connect.php');
include('master.php');
?>



<div class="container">
    <div class="row">
        <h2 class="text-center" style="color: blue;">Danh sách loại nhân viên</h2>
        <button type="button" class="btn btn-default btn-lg"><a href="them.php">Thêm loại nhân viên</a></button>
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