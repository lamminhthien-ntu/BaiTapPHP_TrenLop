<head>
    <style>
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
<?php

//Thêm mini framework vào bài này
// (Do em lấy cảm hứng từ laravel)
include ("../../Thien_Lib/thien_framework.php");
//Khởi động phiên làm việc, lưu trữ dữ liệu liên tục
// cho đến khi tắt trình duyệt thì phiên mới biến mất
session_start();


//Tạo mảng 2 chiều như trong hình
//Nếu đã có session products rồi thì đừng tạo mảng này nữa
if (!isset($_SESSION['products']))
{
    $_SESSION['products'] = array(
        array("A001", "Sửa tắm XMen", "Chai 50ml", 50),
        array("A002", "Dầu gội đầu Lifeboy", "Chai 50ml", 20),
        array("B001", "Dầu ăn Cái Lân", "Chai 1 lít", 10),
        array("B002", "Đường cát", "Kg", 15),
        array("C001", "Chén sứ Minh Long", "Bộ 10 cái", 2)
    );
}
//In mảng 2 chiều bằng foreach
//foreach ($products as $row) {
//    echo $row[0];
//    echo $row[1];
//    echo $row[2];
//    echo $row[3];
//    echo  "<br>";
//}

//Lấy dữ liệu từ form qua phương thức GET
$col1 = KT_InputGET('1');
$col2 = KT_InputGET('2');
$col3 = KT_InputGET('3');
$col4 = KT_InputGET('4');

//Đưa dữ liệu tù form vào mảng session
//Lấy vị trí của dòng cuối cùng
$_SESSION['lastrow'] = count($_SESSION['products']);
$lastrow = $_SESSION['lastrow'];

//Đưa dữ liệu nhập vào từng cột
if (isset($_GET['1'])  && isset($_GET['2']) && isset($_GET['3']) && isset($_GET['4']))
{
    $_SESSION['products'][$lastrow][0] = $col1;
    $_SESSION['products'][$lastrow][1] = $col2;
    $_SESSION['products'][$lastrow][2] = $col3;
    $_SESSION['products'][$lastrow][3] = $col4;
}

//Cập nhật lại vị trí dòng cuối cùng sau khi tăng thêm dữ liệu
$_SESSION['lastrow'] = count($_SESSION['products']);



?>
<h2>Hóa đơn bán hàng</h2>
<table>
    <tr>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Đơn Vị Tính</th>
        <th>Số lượng</th>
    </tr>
    <!--In mảng 2 chiều, nhiều dòng tr bằng foreach -->
    <?php foreach ($_SESSION['products'] as $row) {   ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
    </tr>
    <?php } ?>
</table>


<!--Form nhập dữ liệu vào mảng, dùng session -->
<form method="get" action="bai5_tonghop.php">
<label>1</label><input type="text" name="1"><br>
<label>2</label><input type="text" name="2"><br>
<label>3</label><input type="text" name="3"><br>
<label>4</label><input type="text" name="4"><br>
    <input type="submit" value="Thêm vào mảng bằng mảng session">
</form>
