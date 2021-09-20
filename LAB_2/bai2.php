<?php
	//Tạo ngẫu nhiên 1 số nguyên có giá trị trong khoảng [1,10]. 
	$a=rand(1,10);
	echo "Số ngẫu nhiên  có giá trị trong khoảng [10,1000] là ".$a.'<br>' ;

	echo 'Bảng cửu chương '.$a.' là <br>';

	for ($i=1; $i <= 10 ; $i++) { 
		echo $a.'*'.$i.'='.$a*$i.'<br>';
	}





?>