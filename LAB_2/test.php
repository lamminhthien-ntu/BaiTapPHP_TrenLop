<?php  
$a=rand(10,1000);
$a=(string)$a;
var_dump($a);
$mang_so = [];

for ($i=0; $i<strlen($a) ; $i++) { 
	$mang_so[$i] = $a[$i];
}

echo 'Chữ số lớn nhất là: <br>';
echo max($mang_so);


?>