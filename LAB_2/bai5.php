<?php


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

$a=rand(-100,100);
$text;

if (ktNguyenTo($a)) {
	echo $a.' Là số nguyên tố';
	$text=$a.' Là số nguyên tố';
}
else
{
	echo $a.' Không là số nguyên tố';
	$text=$a.' Không là số nguyên tố';
}

file_put_contents('soNT.txt', $text);



?>  