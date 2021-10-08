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



    </style>
</head>
<?php

//Tạo mảng 2 chiều như trong hình
$products = array (
    array("A001","Sửa tắm XMen","Chai 50ml",50),
    array("A001","Sửa tắm XMen","Chai 50ml",50),
    array("A001","Sửa tắm XMen","Chai 50ml",50),
    array("A001","Sửa tắm XMen","Chai 50ml",50),
    array("A001","Sửa tắm XMen","Chai 50ml",50)
);

//In mảng 2 chiều bằng foreach
//foreach ($products as $row) {
//    echo $row[0];
//    echo $row[1];
//    echo $row[2];
//    echo $row[3];
//    echo  "<br>";
//}

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
    <?php foreach ($products as $row) {   ?>
    <tr>
        <td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
    </tr>
    <?php } ?>
</table>
