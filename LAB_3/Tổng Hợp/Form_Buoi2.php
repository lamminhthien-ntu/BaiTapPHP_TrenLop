<style>
label {
  text-align: center;
  color: red;
  font-style: italic;
  font-weight: bolder;
  color: red;
  font-weight: bolder;
  border-radius: 10px;
  background-color: beige;
}
form {
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
  background-color: lightblue;
}
* {
	border-radius: 10px;
	background-image: linear-gradient(lightblue, yellow);
}


</style>

<form method="get" action="Form_Buoi2.php">
	<label>Nhập n phải trong khoảng [10,1000]</label>
	<input type="text" name="n"><br><br>
	<label><?php 
	if (!isset($_GET['n']))
		echo "Bạn đang để trống ô nhập";
	elseif (!is_numeric($_GET['n'])) 
		echo "Đây không phải là kiểu số";

	else
	{
			if (($_GET['n']>=10) && ($_GET['n']<=1000))
		{
			$n = $_GET['n'];
			echo "Số bạn nhập nằm trong phạm vi từ 10 đến 1000";
		}
		else
			echo "Số bạn nhập nằm ngoài phạm vi từ 10 đến 1000";
	}
	?> 
</label>
<input type="submit" name="">
<br><br>

<?php 
	// Hàm kiểm tra nguyên tố
	function ktNguyenTo($a) {
		// nhỏ hơn 2 không là nguyên tố
		if ($a < 2) return false;

		// khi lớn hơn 2
		for ($i=2; $i<=sqrt($a);$i++)
		{
			if ($a % $i == 0)
			{
				return false;
			}
		}
		return true;
	}
?>
<label>Số nguyên tố nhỏ hơn số được tạo</label><br><br>
<textarea cols="10" rows="10">
	<?php 
	if (isset($n))
	{
		for ($i=0; $i < $n; $i++) { 
		if (ktNguyenTo($i)) 
		{
			echo $i.'  ';
		}
	}
	}
	?>
</textarea><br><br>
<label>Đếm chữ số của số bạn nhập
</label>
<input type="text" disabled value="
<?php
	function demChuSo($a) {
		$dem=1;
		while ($a>10) {
			$a = $a / 10;
			// echo $a.'  --  ';
			$dem++;
		}
		return $dem;
	}

  	 if (isset($n)) echo demChuSo($n).' chữ số';



?>
">
</input><br><br>
<label>Chữ số lớn nhất là
</label>
<input type="text" disabled value="
<?php
	function tachChuSo($a) {
  	// Mảng để lưu các chữ số
		$chu_So_Array = array();
		while ($a%10 != 0) {
	
		array_push($chu_So_Array, $a%10);
			$a = $a / 10;
			// echo $a.'  --  ';
		}
		return $chu_So_Array;
	
	}

	 if(isset($n)) echo "Chữ số lớn nhất là ".max(tachChuSo($n));



?>
">
</input><br><br>

</form>

