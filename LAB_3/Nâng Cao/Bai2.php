<style>
h2 {
	color: red;
	font-style: italic;
	font-weight: bolder;
}	
td {
	color: red;
	font-weight: bolder;
}
body {
	text-align: center;
}
table {
	margin-left: auto;
	margin-right: auto;
	background-color: beige;
}

</style>
<h2>Thanh toán tiền điện </h2>
<form method="post" action="<?php $_SERVER["PHP_SELF"] ?>">
<table border="2">
	<tr>
		<td>Tên chủ hộ: </td>
		<td>
			<input type="text" name="ten">
		</td>
	</tr>
	<tr>
		<td>Chỉ số cũ: </td>
		<td>
			<input type="text" name="old_num">
		</td>
	</tr>
	<tr>
		<td>Chỉ số mới: </td>
		<td>
			<input type="text" name="new_num">
		</td>
	</tr>
	<tr>
		<td>Đơn giá: </td>
		<td>
			<input type="text" name="don_gia">
		</td>
	</tr>
	<tr>
		<td>Số tiền thanh toán: </td>
		<td>
			<input type="text" name="ketqua" disabled="">
		</td>
	</tr>
	<tr>
		<td style="border: 0;">
			<input type="submit" value="Tính">
		</td>
	</tr>
</table>	


</form>