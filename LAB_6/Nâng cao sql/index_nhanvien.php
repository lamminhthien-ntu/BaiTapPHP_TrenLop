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
            echo 'Bạn đã đăng nhập với tên tài khoản '.$_SESSION['uname'];
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
    <form method="post" action="logout.php">
        <input type="submit" value="Đăng xuất" >
    </form>


	<div class="container">
		<div class="row">
			<h2 class="text-center" style="color: blue;">Danh sách nhân viên</h2>
            <button type="button" class="btn btn-default btn-lg"><a href="them_nhanvien.php">Thêm nhân viên</a></button>
            <form action="index_nhanvien.php" method="get">
                <input name="keyword" placeholder="" value="">
                <input type="submit" value="Tìm nhân viên">
            </form>
			<table class="table">
				<thead>
					<tr>

						<th>ID</th>
						<th>Họ và tên</th>
						<th>Ngay sinh</th>
						<th>Giới tính</th>
						<th>Địa chỉ</th>
						<th>Ảnh</th>
						<th>loại nhân viên</th>
						<th>phòng</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php 
						$row_sql="SELECT MANV,HOTEN,NGAYSINH,GIOITINH,DIACHI,ANH,loainv.TENLOAINV,phongban.TENPHONG from nhanvien JOIN loainv JOIN phongban WHERE nhanvien.MALOAINV = loainv.MALOAINV and nhanvien.MAPHONG = phongban.MAPHONG";
                        if (!empty($_GET['keyword']))
                        {
                            $search = $_GET['keyword'];
                            $row_sql = "SELECT MANV,HOTEN,NGAYSINH,GIOITINH,DIACHI,ANH,loainv.TENLOAINV,phongban.TENPHONG from nhanvien JOIN loainv JOIN phongban WHERE nhanvien.MALOAINV = loainv.MALOAINV and nhanvien.MAPHONG = phongban.MAPHONG and HOTEN like '%$search%'";
                        }
						$row_thuchien=mysqli_query($conn,$row_sql);
//                        var_dump(mysqli_fetch_array($row_thuchien));
						while($dulieu =mysqli_fetch_array($row_thuchien)){
							?>
							<td><?php echo $dulieu['MANV']; ?></td>
							<td><?php echo $dulieu['HOTEN']; ?> </td>
							<td><?php echo $dulieu['NGAYSINH']; ?></td>
							<td><?php echo $dulieu['GIOITINH']; ?></td>
							<td><?php echo $dulieu['DIACHI']; ?></td>
							<td><?php echo $dulieu['ANH']; ?></td>
							<td><?php echo $dulieu['TENLOAINV']; ?></td>
							<td><?php echo $dulieu['TENPHONG']; ?></td>
							<td>
								<a onclick=" return confirm('bạn có chắc muốn sửa không')" href="sua_nhanvien.php?id=<?php echo $dulieu['id'] ?>" title="sửa"><img src="icon/edit.png" width="25px">
								</a>
							</td>
							<td>
								<a onclick=" return confirm('bạn có chắc muốn xóa không') " href="xoa_nhanvien.php?id=<?php echo $dulieu['MANV']; ?>" ><img src='icon/delete.jpg' width='25px' >
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