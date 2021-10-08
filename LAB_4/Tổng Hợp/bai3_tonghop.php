<head>
    <link href="../../Thien_Lib/thien_style.css" rel="stylesheet">

</head>
<?php
session_start();
//Nếu đã nhấn nút random lại xổ số thì unset session giai 4
if (isset($_GET["unset-session"])) unset($_SESSION["Giai4"]);


function KT_InputGET($input)
{
    if (!isset($_GET[$input])) return "Ô $input đang để trống";
    else    return $_GET[$input];
}

//Method POST Hàm để kiểm tra dữ liệu nhập vào có bị bỏ trống hay không
//Nếu thoả mãn thì in trả về giá trị theo phương thức pos

function KT_InputPOST($input)
{
    if (!isset($_POST[$input])) return "Ô $input đang để trống";
    else    return $_POST[$input];
}

//Hàm kiểm tra có phải là số hay không
//Trước khi tiến hành xử lí số
function KT_XuLiSo($number)
{
    if (is_numeric($number)) return true;
    else return  false;
}


//Hàm xuất mảng cho bài tập xổ số
function XuatMangXoSo($array,$seperator,$limit_num,$tengiai)
{
    for ($i=0;$i<count($array);$i++)
        $array[$i] = ChenSo0($array[$i],$limit_num);

    TimNguoiTrungGiai($array,$tengiai);


    return implode($seperator,$array)."&#13;&#10;";
}


//Hàm tạo mảng các số ngẫu nhiên duy nhất trong mảng
function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
    $numbers = range($min, $max);
    shuffle($numbers);
    return array_slice($numbers, 0, $quantity);
}


//Hàm chèn số  0 vào trước mảng
function ChenSo0($num,$limit_num)
{
    while ($num<$limit_num)
    {
        $num = "0".$num;
        return ChenSo0($num,$limit_num/10);
    }
    return $num;
}

//Hàm tìm người trúng giải
function TimNguoiTrungGiai($array,$tengiai)
{

    $veso = KT_InputGET('veso');
    if (KT_XuLiSo($veso) && strlen($veso)==6)
    {
//        foreach ($array as $v)
//            if ($veso == $v)
//            {
//                echo "Bạn đã trúng giải $tengiai<br>";
//                break;
//            }
//            else echo "Chưa trúng<br>";
        switch ($tengiai) {
            case "Giải 8":
                $trungNhieuGiai = $veso[4].$veso[5];
                break;
            case "Giải 7":
                $trungNhieuGiai = $veso[3].$veso[4].$veso[5];
                break;
            case "Giải 6":
                $trungNhieuGiai = $veso[2].$veso[3].$veso[4].$veso[5];
                break;
            case "Giải 5":
                $trungNhieuGiai = $veso[2].$veso[3].$veso[4].$veso[5];
                break;
            case "Giải 4":
                $trungNhieuGiai = $veso[1].$veso[2].$veso[3].$veso[4].$veso[5];
                break;
            case "Giải 3":
                $trungNhieuGiai = $veso[1].$veso[2].$veso[3].$veso[4].$veso[5];
                break;
            case "Giải 2":
                $trungNhieuGiai = $veso[1].$veso[2].$veso[3].$veso[4].$veso[5];
                break;
            case "Giải 1":
                $trungNhieuGiai = $veso[0].$veso[1].$veso[2].$veso[3].$veso[4].$veso[5];
                break;
            case "Giải Đặc Biệt":
                $trungNhieuGiai = $veso[0].$veso[1].$veso[2].$veso[3].$veso[4].$veso[5];
                break;
            default:
                $trungNhieuGiai = $veso;
        }

        foreach ($array as $v)
            if ($trungNhieuGiai == $v)
            {
                echo "Bạn đã trúng giải $tengiai<br>";
                break;
            }
//            else echo "Chưa trúng<br>";

    }
}

if (!isset($_SESSION["Giai4"]))
{
    $Giai4 = UniqueRandomNumbersWithinRange(1, 99999, 4);
    $Giai8 = UniqueRandomNumbersWithinRange(1, 99, 1);
    $Giai6 = UniqueRandomNumbersWithinRange(1, 9999, 3);
    $Giai5 = UniqueRandomNumbersWithinRange(1, 9999, 1);
    $Giai3 = UniqueRandomNumbersWithinRange(1, 99999, 2);
    $Giai2 = UniqueRandomNumbersWithinRange(1, 99999, 1);
    $Giai1 = UniqueRandomNumbersWithinRange(1, 99999, 1);
    $Giai7 = UniqueRandomNumbersWithinRange(1, 999, 1);
    $GiaiDacBiet = UniqueRandomNumbersWithinRange(1, 999999, 1);
    $_SESSION["Giai4"]=$Giai4;
    $_SESSION["Giai8"]=$Giai8;
    $_SESSION["Giai6"]=$Giai6;
    $_SESSION["Giai7"]=$Giai7;
    $_SESSION["Giai5"]=$Giai5;
    $_SESSION["Giai3"]=$Giai3;
    $_SESSION["Giai2"]=$Giai2;
    $_SESSION["Giai1"]=$Giai1;
    $_SESSION["GiaiDacBiet"]=$GiaiDacBiet;
}
?>

<form  method="get" action="bai3_tonghop.php" >
    <label>Nhập số cần dò:</label><br>
    <input  type="text" name="veso" value="<?php  if (isset($_GET['veso'])) echo $_GET['veso']; ?>">
    <input type="submit" value="Kiểm tra"  name="save-session">
    <input type="submit" value="Xóa Session (Random lại Số mới)" name="unset-session">
    <table border="9">
        <tr>
            <th>Tên giải </th>
            <th>Con số gì đây, con số gì đây!</th>
        </tr>
        <tr>
            <td>Giải 8</td>
            <td ><?php echo XuatMangXoSo($_SESSION["Giai8"],"--",10,"Giải 8") ?></td>
        </tr>
        <tr>
            <td>Giải 7</td>
            <td><?php echo XuatMangXoSo($_SESSION["Giai7"],"--",100,"Giải 7") ?></td>
        </tr>
        <tr>
            <td>Giải 6</td>
            <td><?php echo XuatMangXoSo($_SESSION["Giai6"],"--",1000,"Giải 6") ?></td>
        </tr>
        <tr>
            <td>Giải 5</td>
            <td><?php echo XuatMangXoSo($_SESSION["Giai5"],"--",1000,"Giải 5") ?></td>
        </tr>
        <tr>
            <td>Giải 4</td>
            <td><?php echo XuatMangXoSo($_SESSION["Giai4"],"--",10000,"Giải 4") ?></td>
        </tr>
        <tr>
            <td>Giải 3</td>
            <td><?php echo XuatMangXoSo($_SESSION["Giai3"],"--",10000,"Giải 3") ?></td>
        </tr>
        <tr>
            <td>Giải 2</td>
            <td><?php echo XuatMangXoSo($_SESSION["Giai2"],"--",10000,"Giải 2") ?></td>
        </tr>
        <tr>
            <td>Giải 1</td>
            <td><?php echo XuatMangXoSo($_SESSION["Giai1"],"--",10000,"Giải 1") ?></td>
        </tr>
        <tr>
            <td>Giải Đặc biệt</td>
            <td><?php echo XuatMangXoSo($_SESSION["GiaiDacBiet"],"--",100000,"Giải Đặc Biệt") ?></td>
        </tr>

    </table>
</form>


