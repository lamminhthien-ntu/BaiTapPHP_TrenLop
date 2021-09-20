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
//Mở file ở chế độ chỉ ghi, con trỏ được đưa xuống cuối file
$f = fopen('soNT.txt', 'a');

if (ktNguyenTo($a)) {
	echo "$a Là số nguyên tố \n ";
	$text= "$a Là số nguyên tố \n ";
}
else
{
	echo "$a Không số nguyên tố \n ";
	$text= "$a Không Là số nguyên tố \n ";
}

//Cách này ghi file mà không cần mở đọc, ghi file
//Vì nó tự tạo file và điền nội dung vào
// file_put_contents('soNT.txt', $text);

fwrite($f, $text);
fclose($f);



echo "<br> Test chức năng đọc file <br>";
$f = fopen('soNT.txt', 'r+');
$test=fread($f, filesize("soNT.txt"));
echo($test);

// $array = file('soNT.txt');
// foreach($array as $key => $line) {
//     $array[$key] = explode(" ", $line);
// }






?>  