
<?php
var_dump($_GET['monhoc']);
isset($_GET['hoten']) ? $hoten = $_GET['hoten'] : $hoten = 'Chưa nhập họ tên';
isset($_GET['diachi'])? $diachi = $_GET['diachi'] : $diachi = 'Chưa nhập địa chỉ';
isset($_GET['sdt'])? $sdt = $_GET['sdt'] : $sdt = 'Chưa nhập số điện thoại';
isset($_GET['sex']) ? $sex = $_GET['sex'] : $sex = 'Chưa chọn giới tính';
isset($_GET['quoctich']) ? $quoctich = $_GET['quoctich'] : $quoctich = 'Chưa chọn quốc tịch';
isset($_GET['monhoc']) ? $monhoc = $_GET['monhoc'] : $monhoc = 'Chưa chọn môn học';
isset($_GET['ghichu']) ? $ghichu = $_GET['ghichu'] : $ghichu = 'Chưa nhập ghi chú';

?>



<p>Bạn đã đăng nhập thành công, dưới đây là những thông tin bạn đăng nhập</p>
<p>Họ tên: <?php echo $hoten;?> </p>
<p>Giới tính: <?php echo $sex;?> </p>
<p>Địa chỉ: <?php echo $diachi;?> </p>
<p>Điện thoại: <?php echo $sdt;?> </p>
<p>Quốc tịch <?php echo $quoctich;?> </p>
<p>Môn học: <?php
foreach ($monhoc as $mh) echo $mh." ,";
?> </p>
<p>Ghi chú: <?php echo $ghichu;?> </p>
<a href="javascript:window.history.back(-1);">Trở về trang trước</a>



