<?php
	//Tạo ngẫu nhiên 1 số nguyên có giá trị trong khoảng [10,1000]. 
	$a=rand(10,1000);
	echo "Số ngẫu nhiên  có giá trị trong khoảng [10,1000] là ".$a.'<br>' ;

	//Hiển thị các số nguyên tố nhỏ hơn số nguyên được tạo.

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

	echo "a) Hiển thị các số nguyên tố nhỏ hơn ".$a."<br>";

	for ($i=0; $i < $a; $i++) { 
		if (ktNguyenTo($i)) 
		{
			echo $i.'  ';
		}
	}


	//Cho biết số nguyên này có bao nhiêu chữ số.
	echo "<br> b) Cho biết số nguyên này có bao nhiêu chữ số. <br>";

	function demChuSo($a) {
		$dem=1;
		while ($a>10) {
			$a = $a / 10;
			// echo $a.'  --  ';
			$dem++;
		}
		return $dem;
	}

  	echo demChuSo($a).' chữ số';

  	echo "<br> c) Cho biết chữ số lớn nhất trong số nguyên này <br>";

  function tachChuSo($a) {
  	// Mảng để lưu các chữ số
		$chu_So_Array = array();
		while ($a>0) {
	
		array_push($chu_So_Array, $a);
			$a = $a / 10;
			// echo $a.'  --  ';

		}
		return $chu_So_Array;
	
	}


	var_dump(tachChuSo($a));



?>