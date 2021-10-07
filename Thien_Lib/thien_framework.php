<?php

//Method GET Hàm để kiểm tra dữ liệu nhập vào có bị bỏ trống hay không
//Nếu thoả mãn thì in trả về giá trị theo phương thức get
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

//Hàm vừa xoá kí tự khoảng trắng thừa, vừa tách mảng
function TachMang($array,$seperator)
{
    //Xoá kí tự khoảng trắng
    trim($array," ");
    //Tách mảng theo dấu phân cách tuỳ ý
    return explode(",",$seperator);
}


//Hàm để xuất ra mảng (em sợ quên hàm implode)
//Tham số là Array và Seperator (Dấu phân cách)
//Đặc biệt dấu phân cách có thể là <br> để in mảng xuống dòng. Thật tuyệt vời
function XuatMang($array,$seperator)
{
     return implode($seperator,$array)."&#13;&#10;";
}

//Hàm xuất mảng cho bài tập xổ số
function XuatMangXoSo($array,$seperator,$limit_num)
{
    for ($i=0;$i<count($array);$i++)
        $array[$i] = ChenSo0($array[$i],$limit_num);

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



?>