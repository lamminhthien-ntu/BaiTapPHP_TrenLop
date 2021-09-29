<?php
isset($_POST["ten"]) ? $ten = $_POST["ten"] : $ten = "";
isset($_POST["new_num"]) ? $new_num = $_POST["new_num"] : $new_num = "";
isset($_POST['old_num']) ? $old_num = $_POST['old_num'] : $old_num = "";
isset($_POST['dongia']) ? $dongia = $_POST['dongia'] : $dongia = "20000";


if (is_numeric($old_num) && is_numeric($new_num) && is_numeric($dongia)) {
	$ketqua = ($new_num - $old_num)*$dongia;
}
else $ketqua = "Dữ liệu đầu vào lỗi";
?>

<style>
h2 {
	text-align: center;
	color: red;
	font-style: italic;
	font-weight: bolder;
	margin-top: auto;
	margin-bottom: auto;
}	
td {
	color: red;
	font-weight: bolder;
}
table,tr,td,input {
	border-radius: 10px;
	margin-left: auto;
	margin-right: auto;
	background-color: beige;
}
input {
	background-color: yellowgreen;
}


</style>
<form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
<table border="2">
	<tr>
		<td colspan="2"><h2>Thanh toán tiền điện </h2></td>
	</tr>
	<tr>
		<td>Tên chủ hộ: </td>
		<td>
			<input type="text" name="ten" value="<?php echo $ten; ?>">
		</td>
	</tr>
	<tr>
		<td>Chỉ số cũ: </td>
		<td>
			<input type="text" name="old_num" value="<?php echo $old_num; ?>"> (Kw)
		</td>
	</tr>
	<tr>
		<td>Chỉ số mới: </td>
		<td>
			<input type="text" name="new_num" value="<?php echo $new_num; ?>"> (Kw)
		</td>
	</tr>
	<tr>
		<td>Đơn giá: </td>
		<td>
			<input type="text" name="dongia" id="dongia" value="<?php echo $dongia; ?>"> (VNĐ)
		</td>
	</tr>
	<tr>
		<td>Số tiền thanh toán: </td>
		<td>
			<input type="text" name="ketqua" disabled="" value="<?php 
				if ($ketqua > 0) echo $ketqua;
				else echo "Chỉ số mới phải lớn hơn chỉ số cũ";
			 ?>"> (VNĐ)
		</td>
	</tr>
	<tr>
		<td style="border: 0;">
			<input type="submit" value="Tính">
		</td>
	</tr>
</table>	


</form>