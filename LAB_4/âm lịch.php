<?php
$mang_can = array("Qúy","Giáp",'Ất','Binh','Đinh','Mậu','Kỷ','Canh','Tân','Nhâm');
$mang_chi = array('Hợi','Tý','Sửu','Dần','Mão','Thìn','Tỵ','Ngọ','Mùi','Thân','Dậu','Tuất');
$mang_hinh = array('hoi.jpg','ty.jpg','suu.jpg','dan.jpg','mao.jpg','thin.gif','rain.jpg','ngo.jpg','mui.jpg','than.gif','dau.jpg','tuat.jpg');




?>
<head>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>
<h1 style="text-align: center">TÍNH NĂM ÂM LỊCH</h1>
<form method="post" action="âm%20lịch.php">
    <table>
        <tr>
            <td>Năm dương lịch</td>
            <td>        </td>
            <td>Năm âm lịch</td>
        </tr>

        <tr>
            <td><input type="text" name="duongLich" value=""></td>
            <td><input type="button" value="=>"></td>
            <td><input type="text" name="amLich" value="" disabled></td>
        </tr>
    </table>
    <img src="" class="center">
</form>
