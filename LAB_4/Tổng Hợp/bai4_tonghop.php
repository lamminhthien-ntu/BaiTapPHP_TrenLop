<?php
include ("../../Thien_Lib/thien_framework.php");
$m = KT_InputGET('m');
$n = KT_InputGET('n');
$matran_2chieu = [];

//Tạo ma trận m*n gồm các số ngẫu nhiên từ -200 đến 200
for ($i=0;$i<$m;$i++) {
    for ($j = 0; $j < $n; $j++)
        $matran_2chieu[$i][$j] = rand(-200, 200);
}

function InMang2Chieu($array,$m,$n)
{
   if (is_numeric($m) && is_numeric($n))
   {
       echo "<table border='9' bgcolor='#7fffd4'>";
       for ($i=0;$i<$m;$i++)
       {
           echo "<tr>";
           for ($j = 0; $j < $n; $j++)
               echo "<td>".$array[$i][$j]."</td>";
           echo "</tr>";


       }
       echo "</table>";
   }
   else echo "Dữ liệu bạn nhập vào chưa đủ hoặc không hợp lệ";
}
function KT_SoCuoiLe($num)
{
    $num =$num%10;
    if ($num % 2 != 0)
        return true;
    return false;
}

function DemSoCuoiLaSoLe($array,$m,$n)
{
    if (is_numeric($m) && is_numeric($n))
    {
        $dem=0;
        for ($i=0;$i<$m;$i++)
        {
            for ($j = 0; $j < $n; $j++)
//                echo "<td>".$array[$i][$j]."</td>";
                  if (KT_SoCuoiLe($array[$i][$j])) $dem++;
        }
        echo "Có $dem số ";
    }
    else echo "Dữ liệu bạn nhập vào chưa đủ hoặc không hợp lệ";
}


function ThayTheKhac0To1($array,$m,$n)
{
    for ($i=0;$i<$m;$i++) {
        for ($j = 0; $j < $n; $j++)
           if ($array[$i][$j]!=0) $array[$i][$j] = 1;
    }
    InMang2Chieu($array,$m,$n);
}
?>

<head>
    <link rel="stylesheet" href="../../Thien_Lib/thien_style_table.css">
    //Ghi đè CSS
    <style>
        td {

            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;

        }
    </style>
</head>
<form method="get" action="bai4_tonghop.php">
    <label>Nhập m</label>
    <input type="text" name="m" value="<?php echo $m?>">
    <br>
    <label>Nhập n</label>
    <input type="text" name="n" value="<?php echo $n?>">
    <br>
    <input type="submit">
    <br>
    <label>In ra ma trận 2 chiều</label>
    <?php InMang2Chieu($matran_2chieu,$m,$n);  ?>
    <br>
    <label>Đếm số phần tử có số cuối là số lẻ</label><br>
    <input type="text" value="<?php echo DemSoCuoiLaSoLe($matran_2chieu,$m,$n); ?>"><br>
    <label>Thay thế các phần tử khác 0 thành 1</label>
    <?php
          ThayTheKhac0To1($matran_2chieu,$m,$n);
    ?>

</form>
