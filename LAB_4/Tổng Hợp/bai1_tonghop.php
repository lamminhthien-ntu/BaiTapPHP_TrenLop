<?php
function KT_Input($input)
{
    if (!isset($_GET[$input])) return "Ô $input đang để trống";
    elseif (!is_numeric($_GET[$input])) return "Ô $input không phải là số";
    else    return $_GET[$input];
}
function KT_XuLiSo($number)
{
    if (is_numeric($number)) return true;
    else return  false;
}


$n = KT_Input('n');
$mang = [];
$chen_so = KT_Input('chen_so');
$vitri = KT_Input('vitri');
$mang_in_ra = "";
$mang_in_ra_tang_dan = "";
$mang_in_ra_chen_so = "";
$mang_in_ra_cuoi = "";

if (KT_XuLiSo($n) && KT_XuLiSo($chen_so) && KT_XuLiSo($vitri))
{
    //echo "<br> Mảng có $n chữ số";
    for ($i=0; $i<$n;$i++)
    {
        array_push($mang,rand(2,20));
    }



//echo "<br>".var_dump($mang);
    foreach ($mang as $mang_v)
        $mang_in_ra = $mang_in_ra.$mang_v.",";


//echo "<br> Sắp xếp mảng tăng dần";
    sort($mang);

    foreach ($mang as $mang_v)
        $mang_in_ra_tang_dan = $mang_in_ra_tang_dan.$mang_v.",";
//echo "<br>".var_dump($mang);

//echo  "<br> Thay số  ".$chen_so."vào $vitri của  mảng sau khi sắp xếp tăng dần";
//array_splice($mang, $vitri, 1, $chen_so);
//var_dump($mang);

//echo  "<br> Chèn số  ".$chen_so."vào $vitri của  mảng sau khi sắp xếp tăng dần";
    array_splice($mang, $vitri, 0, $chen_so);
//var_dump($mang);

    foreach ($mang as $mang_v)
        $mang_in_ra_chen_so = $mang_in_ra_chen_so.$mang_v.",";

    $mang_trai =  [];
    $mang_phai = [];
//echo "<br> Sắp xếp mảng từ bên trái đến vị trí được chèn theo chiều tăng dần";


//Chia ra thành 2 mảng trái , phải theo yêu cầu của cô trước khi làm sắp xếp
    for ($i=0;$i<=$n;$i++)
    {
        if ($i<=$vitri)  array_push($mang_trai,$mang[$i]);
        else array_push($mang_phai,$mang[$i]);

    }

//SẮp xếp mảng trái tăng dần
    asort($mang_trai);
//Sắp xếp mảng phải giảm dần
    rsort($mang_phai);

//Nối 2 mảng lại với nhau
    $mang_cuoi = array_merge($mang_trai,$mang_phai);
    var_dump($mang_phai);

    foreach ($mang_cuoi as $mang_v)
        $mang_in_ra_cuoi = $mang_in_ra_cuoi.$mang_v.",";
}





?>
<head>
  <link rel="stylesheet" href="../../Thien_Lib/thien_style_table.css">
</head>


<div class="anime-bg">
    <form method="get" action="bai1_tonghop.php" class="border-rounded margin-center background-green">
        Nhập n:<input type="text" class="border-violet text-red" name="n"><br>
        Nhập số cần chèn:<input type="text" class="border-violet text-red" name="chen_so"><br>
        Nhập vị trí cần chèn:<input type="text" class="border-violet text-red" name="vitri"><br>
        Thực hiện: <input type="submit"><br>
        In ra mảng: <input disabled type="text"  class="border-violet text-red" value="<?php echo $mang_in_ra; ?>"><br>
        Mảng sắp xếp tăng dần: <input disabled type="text" class="border-violet text-red" value="<?php echo $mang_in_ra_tang_dan; ?>"><br>
        Mảng sau khi chèn: <input disabled type="text" class="border-violet text-red" value="<?php echo $mang_in_ra_chen_so; ?>"><br>
        Mảng sau khi sắp xếp tăng dần phía bên trái tính từ số được chèn và tăng dần bên phải số được chèn
        <input disabled type="text" class="border-violet text-red" value="<?php echo $mang_in_ra_cuoi; ?>"><br>

    </form>
</div>
