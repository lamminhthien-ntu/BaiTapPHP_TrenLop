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
?>
<form method="post" action="logout.php">
    <input type="submit" value="Đăng xuất" >
</form>

	<?php 
	$err="";
	if (isset($_GET['btnsubmit'])) {
		$HOTEN = $_GET["HOTEN"];		
		$NGAYSINH=$_GET['NGAYSINH'];
		$GIOITINH = $_GET["GIOITINH"];
		$MALOAINV=$_GET['MALOAINV'];
		$ANH=$_GET['ANH'];
		$DIACHI=$_GET['DIACHI'];
		$MAPHONG=$_GET['MAPHONG'];
//        var_dump($HOTEN);
//        var_dump($NGAYSINH);
//        var_dump($MAPHONG);

		if(empty($_GET['HOTEN'])||empty($_GET['NGAYSINH'])||empty($_GET['MALOAINV'])||empty($_GET['ANH'])||empty($_GET['DIACHI'])||empty($_GET['MAPHONG'])||empty($_GET['GIOITINH'])){
			$err= "<p style='color:red;'>bạn cần nhập đầy đủ thông tin!</p>";
		}else{
			$sql="SELECT * FROM nhanvien WHERE HOTEN='$HOTEN' AND MALOAINV='$MALOAINV'";
			$thucthi=mysqli_query($conn,$sql);
			if(mysqli_num_rows($thucthi)>0){
				echo "<p style='color:red;text-align: center;'>đã tồn tại trong CSDL!</p>";
			}else{
				$sql_insert="INSERT INTO `nhanvien` ( `HOTEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`) VALUES ( $HOTEN, $NGAYSINH, $GIOITINH, $DIACHI, $ANH, $MALOAINV`, $MAPHONG)";
				
				mysqli_query($conn,$sql_insert);
				echo "<p style='color:green;text-align: center;'>đã thêm thành công!</p>";	
				//header("location:index_nhanvien.php");
			}
		}
	}
	?>


	<div class="container">
		<div class="row text-center">
			<div class="col-sm-10 col-sm-offset-1">
				<h2 class="" style="color: green;font-weight: 700;">Thêm nhân viên</h2>
				<?php echo $err; ?>
				<form class="form-horizontal" action="" method="get">
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">Họ và tên</label>
						
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="nhập tên" name="HOTEN">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">Ngày sinh</label>
						<div class="col-sm-6 ">
							<input type="date" class="form-control" placeholder="nhập ngày sinh" name="NGAYSINH">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">giới tính</label>
						<div class="col-sm-6 ">
							<input type="radio" checked name="GIOITINH" value="0">Nữ
							<input type="radio" name="GIOITINH" value="1">Nam

							<br>						
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1" for="MALOAINV">Loại nhân viên</label>
						<div class="col-sm-6 ">
                            <td><select name="MALOAINV">
                                    <?php
                                    $query="select * from loainv";	//Hiển thị tên các loại nhân viên
                                    $result=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result)<>0){
                                        while($row=mysqli_fetch_array($result)){
                                            $MALOAINV=$row['MALOAINV'];
                                            $TENLOAINV=$row['TENLOAINV'];
                                            echo "<option value='$MALOAINV' ";
                                            if(isset($_REQUEST['MALOAINV']) && ($_REQUEST['MALOAINV']==$MALOAINV)) echo "selected='selected'";
                                            echo ">$TENLOAINV</option>";
                                        }
                                    }
                                    mysqli_free_result($result);
                                    ?>
                                </select></td>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1" >Ảnh</label>
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="chức vụ" name="ANH">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-2 col-sm-offset-1">địa chỉ</label>
						<div class="col-sm-6 ">
							<input type="text" class="form-control" placeholder="địa chỉ" name="DIACHI">
						</div>
					</div>

                    <div class="form-group">
                        <label class="control-label col-sm-2 col-sm-offset-1">Loại phòng</label>
                        <div class="col-sm-6 ">
                            <td><select name="MAPHONG">
                                    <?php
                                    $query="select * from phongban";	//Hiển thị tên các loại nhân viên
                                    $result=mysqli_query($conn,$query);
                                    if(mysqli_num_rows($result)<>0){
                                        while($row=mysqli_fetch_array($result)){
                                            $maphong=$row['MAPHONG'];
                                            $tenphong=$row['TENPHONG'];
                                            echo "<option value='$tenphong' ";
                                            if(isset($_REQUEST['MAPHONG']) && ($_REQUEST['TENPHONG']==$tenphong)) echo "selected='selected'";
                                            echo ">$tenphong</option>";
                                        }
                                    }
                                    mysqli_free_result($result);
                                    ?>
                                </select></td>
                        </div>
                    </div>
					<input class="form-control btn-success" name="btnsubmit" value="Thêm" type="submit"></input>
					<input  class="form-control btn-danger" type="reset" name="btnreset" value="nhập lại"></input>
				</form>
			</div>
		</div>
	</div>


</body>
</html>
