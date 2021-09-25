<?php
//Tạo ngẫu nhiên một số nguyên a có giá trị trong khoảng [1,5] và một số nguyên btrong khoảng [10,100].
$a = rand(1,5);
$b = rand(10,100);
echo 'a = '.$a.' <br>';
echo 'b = '.$b.' <br>';
//Khai báo hằng cho số pi
define('soPI', 3.14);

switch ($a) {
  case 1:
  //Nếu số a là 1: Tính chu vi và diện tích của hình vuông có cạnh là b.
    echo 'Chu vi hình vuông '.($b*4).'  <br>';
    echo "Diện tích hình vuông ".pow($b,2)."<br>";
    break;

  case 2:
  	//Nếu số a là 2: Tính chu vi và diện tích của hình tròn có bán kính là b.
    echo "Chu vi hình tròn ".$b*2*soPI."<br>";
    echo "Diện tích hình tròn ".pow($b,2)*soPI."<br>"; 	
    break;

  case 3:
    //Nếu số a là 3: Tính chu vi và diện tích của hình tam giác đều có cạnh là b.
	echo 'Chu vi tam giác đều '.($b*3).' <br>';
    echo "Diện tích tam giác đều ".pow($b,2)*sqrt(3/4)."<br>";
    break;

   case 4:
    //Nếu số a là 4: Tính chu vi và diện tích của hình chữ nhật có 2 cạnh là a và b.
	echo 'Chu vi hình chữ nhật '.(($a+$b)*2).' <br>';
    echo "Diện tích tam giác đều ".$a*$b."<br>";
    break;
  default:
    echo "Số ngẫu nhiên $a không nằm trong phạm vi từ 1 đến 4, đề nghị bạn Reload lại web lấy số ngẫu nhiên khác";
}
?>