<?php
//-   Tạo form gồm các trường sau:
//
//Các trường số dòng, số cột của 2 ma trận (4 trường).
//Nút xử lý.
//-  Sau khi nhấn nút xử lý:
//
//   + Các phần tử của ma trận được tạo ngẫu nhiên.
//
//+ Thực hiện tính tổng và hiệu của ma trận.
//
//+ Hiển thị lại 2 ma trận ban đầu cùng với các ma trận kết quả.
//
//-   Lưu ý kiểm tra điều kiện hợp lệ khi tính tổng 2 ma trận.

//Kiểm tra dữ liệu đầu vào:
isset($_GET["so_dong1"]) ? $so_dong1 = $_GET["so_dong1"] : $so_dong1 = "";
isset($_GET["so_dong2"]) ? $so_dong2 = $_GET["so_dong2"] : $so_dong2 = "";
isset($_GET["so_cot1"]) ? $so_cot1 = $_GET["so_cot1"] : $so_cot1 = "";
isset($_GET["so_cot2"]) ? $so_cot2 = $_GET["so_cot2"] : $so_cot2 = "";
$catch_bug = "";

if (is_numeric($so_dong1) && is_numeric($so_dong2) && is_numeric($so_cot1) && is_numeric($so_cot2))
{
    if (($so_dong1>0) && (is_int(intval($so_dong1))) && ($so_dong2>0) && (is_int(intval($so_dong2))) && ($so_cot1>0) && (is_int(intval($so_cot1)))&& ($so_cot2>0) && (is_int(intval($so_cot2))))
    {
        //Tạo 2 ma trận ngẫu nhiên
//Tạo ma trận 1 gồm các số ngẫu nhiên từ 0 tới 300
        for ($i=0;$i<$so_dong1;$i++) {
            for ($j = 0; $j < $so_cot1; $j++)
                $matran_2chieu_1[$i][$j] = rand(0, 300);
        }
        //var_dump($matran_2chieu_1);

//Tạo 2 ma trận ngẫu nhiên
//Tạo ma trận 2 gồm các số ngẫu nhiên từ 0 tới 300
        for ($i=0;$i<$so_dong2;$i++) {
            for ($j = 0; $j < $so_cot2; $j++)
                $matran_2chieu_2[$i][$j] = rand(0, 300);
        }
        //var_dump($matran_2chieu_2);
    }
    else $catch_bug = "Ây da, bạn chưa nhập vào số nguyên dương kìa, kiểm tra cẩn thận nhan";
}
else $catch_bug="Dữ liệu đầu vào không hợp lệ, chỉ chấp nhận số nguyên dương cho các trường";

//Hàm để in ma trận 2 chiều bất kì
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
    else echo "";
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
<body>
    <form action="KT_GiuaKi.php" method="get">
        Số dòng ma trận 1:
        <input type="text" name="so_dong1" value="<?php if(isset($_GET['so_dong1'])) echo $_GET['so_dong1']; ?>"><br>
        Số Cột ma trận 1:
        <input type="text" name="so_cot1" value="<?php if(isset($_GET['so_cot1'])) echo $_GET['so_cot1']; ?>"><br>
        <br>
        <br>
        <br>
        Số dòng ma trận 2:
        <input type="text" name="so_dong2" value="<?php if(isset($_GET['so_dong2'])) echo $_GET['so_dong2']; ?>"><br>
        Số Cột ma trận 1:
        <input type="text" name="so_cot2" value="<?php if(isset($_GET['so_cot2'])) echo $_GET['so_cot2']; ?>"><br>
        <input type="submit" value="Xử lí">
        <br>
        <br>
        <label>In ra ma trận thứ nhất </label>
        <?php if (isset($matran_2chieu_1)) InMang2Chieu($matran_2chieu_1,$so_dong1,$so_cot1);  ?>
        <br>
        <label>In ra ma trận thứ hai </label>
        <?php if (isset($matran_2chieu_2)) InMang2Chieu($matran_2chieu_2,$so_dong2,$so_cot2);  ?>
        <br>
        <label>Tổng 2 ma trận</label>
        <?php
        if (is_numeric($so_dong1) && is_numeric($so_dong2) && is_numeric($so_cot1) && is_numeric($so_cot2)) {
            if (($so_cot1<=$so_cot2) && ($so_dong1<=$so_dong2))
            {
                for ($i = 0; $i < $so_dong1; $i++) {
                    for ($j = 0; $j < $so_cot1; $j++) {
                        $arr3[$i][$j] = $matran_2chieu_1[$i][$j] + $matran_2chieu_2[$i][$j];
                    }
                }
            }
           else $catch_bug = "Chú ý số dòng và số cột của ma trận 1 phải nhỏ hơn số dòng và số cột của ma trận 2 ";
        } else
            echo "Dữ liệu nhập vào không hợp lệ";
        ?>
        <?php if (isset($arr3)) InMang2Chieu($arr3,$so_dong1,$so_cot1);  ?>
        <br>
        <label>Hiệu 2 ma trận</label>
        <?php
        if (is_numeric($so_dong1) && is_numeric($so_dong2) && is_numeric($so_cot1) && is_numeric($so_cot2)) {
            if (($so_cot1<=$so_cot2) && ($so_dong1<=$so_dong2))
            {
                for ($i = 0; $i < $so_dong1; $i++) {
                    for ($j = 0; $j < $so_cot1; $j++) {
                        $arr4[$i][$j] = $matran_2chieu_1[$i][$j] - $matran_2chieu_2[$i][$j];
                    }
                }
            }
            else $catch_bug = "Chú ý số dòng và số cột của ma trận 1 phải nhỏ hơn số dòng và số cột của ma trận 2 ";

        } else
           echo "Dữ liệu nhập vào không hợp lệ";
        ?>
        <?php if (isset($arr4)) InMang2Chieu($arr4,$so_dong1,$so_cot1);  ?>
        <br>
        <?php echo $catch_bug; ?>

    </form>
</body>
