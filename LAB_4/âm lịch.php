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
        * {
            text-align: center;
            color: red;
            font-style: italic;
            font-weight: bolder;
            color: red;
            font-weight: bolder;
            border-radius: 10px;
            background-color: beige;
        }
        disabled {
            background-color: gainsboro;
        }
        form {
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
            background-color: lightblue;
        }
        * {
            border-radius: 10px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
        h2{

            font-size: 30px;
            color: #ff8100;
        }


        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=button] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
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
