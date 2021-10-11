<?php
$mang_can = array("Qúy","Giáp",'Ất','Binh','Đinh','Mậu','Kỷ','Canh','Tân','Nhâm');
$mang_chi = array('Hợi','Tý','Sửu','Dần','Mão','Thìn','Tỵ','Ngọ','Mùi','Thân','Dậu','Tuất');
$mang_hinh = array('hoi.jpg','ty.jpg','suu.png','dan.jpg','mao.jpg','thin.jpg','ty.jpg','ngo.jpg','mui.jpg','than.jpg','dau.jpeg','tuat.jpg');

//KT và lấy giá trị âm lịch
isset($_POST["duongLich"]) ? $nam = $_POST["duongLich"] : $nam = "";

if (is_numeric($nam))
{
    $nam = $nam-3;
    $can = $nam%10;
    $chi = $nam%12;
    $nam_al = $mang_can[$can];
    $nam_al = $nam_al."".$mang_chi[$chi];
    $hinh = $mang_hinh[$chi];
    $hinh_anh = "<img src='12con_giap/$hinh'>";
}


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
            <td><input type="text" name="duongLich" value="<?php if(isset($_POST['duongLich'])) echo $_POST['duongLich']; else echo '';?>"></td>
            <td><input type="submit" value="=>"></td>
            <td><input type="text" name="amLich" value="<?php if (isset($nam_al))  echo $nam_al; else echo '';?>" disabled></td>
        </tr>
    </table>
   <div class="center">
       <?php echo $hinh_anh; ?>
   </div>
</form>
