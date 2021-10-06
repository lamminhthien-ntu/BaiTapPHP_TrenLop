<?php

//Method GET Hàm để kiểm tra dữ liệu nhập vào có bị bỏ trống hay không
//Nếu thoả mãn thì in ra lệnh get
function KT_InputGET($input)
{
    if (!isset($_GET[$input])) return "Ô $input đang để trống";
    else    return $_GET[$input];
}


function KT_InputPOST($input)
{
    if (!isset($_POST[$input])) return "Ô $input đang để trống";
    else    return $_POST[$input];
}


function KT_XuLiSo($number)
{
    if (is_numeric($number)) return true;
    else return  false;
}



?>