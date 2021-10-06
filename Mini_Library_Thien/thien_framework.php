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



?>