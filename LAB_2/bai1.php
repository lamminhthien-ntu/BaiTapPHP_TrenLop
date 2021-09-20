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
	for ($i=2; $i=sqrt($a);$i++)
	{
		if ($a % $i == 0)
		{
			return false;
		}
	}
	return true;
}

echo "Hiển thị các số nguyên tố nhỏ hơn".$a."<br>";

for ($i=0; $i < 100; $i++) { 
	if (ktNguyenTo($i)) 
	{
		echo $i.'<br>';
	}
}

?>