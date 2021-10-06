<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Xử lý n</title>
</head>
<body>
<?php
if(isset($_POST['n'])) $n=$_POST['n']; else $n=0;
if(isset($_POST['so'])) $so=$_POST['so']; else $so=0;

$ketqua="";
$ketqua_sapxep="";
$ketqua_chen_them="";
if(isset($_POST['hthi']))
{	//Tạo mảng có n phần tử, các phần tử có giá trị [-100,100]
    $arr=array();
    for($i=0;$i<$n;$i++)
    {
        $x=rand(-200,200);
        $arr[$i]=$x;
    }
    echo var_dump($arr);
    //In ra mảng vừa tạo
    $ketqua="Mảng được tạo là:" .implode(" ",$arr)."&#13;&#10;";


    //Sắp xép mảng tăng dần theo giá trị
    sort($arr);
    $ketqua_sapxep="Mảng được sắp xếp là:" .implode(" ",$arr)."&#13;&#10;";

    //Chèn một số vào vị trí bất kì trong mảng. In ra mảng sau khi chèn số

    array_splice($arr,rand(0,$n-1),0,$so);
    $ketqua_chen_them="Mảng được chèn thêm là là:" .implode(" ",$arr)."&#13;&#10;";




}
?>
<form action="" method="post">
    Nhập n: <input type="text" name="n" value="<?php echo $n?>"/>
    <input type="submit" name="hthi" value="Hiển thị"/><br>
    Nhập số cần chèn vào vị trí bất kì: <br>
    <input type="text" name="so" value="<?php echo $so?>">
    Kết quả: <br>

    <textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua?></textarea><br>
    Mảng sau khi sắp xếp tăng dần:
    <textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua_sapxep?></textarea><br>
    Mảng sau khi chèn thêm số vào vị trí bất kì:
    <textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua_chen_them?></textarea><br>
</form>
</body>
</html>
