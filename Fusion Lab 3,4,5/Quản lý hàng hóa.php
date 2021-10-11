<?php
session_start();
class MatHang{
    private $maMH;
    private $tenMH;
    private $dvt;
    private $sl;

    /**
     * @param $maMH
     * @param $tenMH
     * @param $dvt
     * @param $sl
     */
    public function __construct($maMH, $tenMH, $dvt, $sl)
    {
        $this->maMH = $maMH;
        $this->tenMH = $tenMH;
        $this->dvt = $dvt;
        $this->sl = $sl;
    }

    /**
     * @return mixed
     */
    public function getMaMH()
    {
        return $this->maMH;
    }

    /**
     * @return mixed
     */
    public function getTenMH()
    {
        return $this->tenMH;
    }

    /**
     * @return mixed
     */
    public function getDvt()
    {
        return $this->dvt;
    }

    /**
     * @return mixed
     */
    public function getSl()
    {
        return $this->sl;
    }
}
 $maMH = $_GET['maMH'];
$tenMH = $_GET['tenMH'];
$dvt = $_GET['dvt'];
$sl = $_GET['sl'];


//$array = $_SESSION;
if (!empty($maMH) && (!empty($tenMH)) && (!empty($dvt)) && (!empty($sl)))
{
    $mh_obj = new MatHang($maMH,$tenMH,$dvt,$sl);
    $_SESSION['mH'][$mh_obj->getMaMH()] = [$mh_obj->getMaMH(),$mh_obj->getTenMH(),$mh_obj->getSl(),$mh_obj->getSl()];

}
else echo "<br>".'Bạn nhập dữ liệu chưa đủ 4 ô input'."<br>";
//var_dump($_SESSION['mH']);


?>
<head>
    <style>
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
<body>
    <form action="Quản%20lý%20hàng%20hóa.php" method="get">
        <input type="text" name="maMH" value="<?php
                if (isset($maMH)) echo $maMH; else echo '';
        ?>"><br>
        <input type="text" name="tenMH" value="<?php
                if (isset($tenMH)) echo $tenMH; else echo '';
        ?>"><br>
        <input type="text" name="dvt" value="<?php
                if (isset($dvt)) echo $dvt; else echo '';
        ?>"><br>
        <input type="text" name="sl" value="<?php
                if (isset($sl)) echo $sl; else echo '';
        ?>"><br>
        <input type="submit">
    </form>
    <table>
       <tr>
           <th>Mã mặt hàng</th>
           <th>Tên mặt hàng</th>
           <th>Số lượng</th>
           <th>Đơn Giá</th>
       </tr>
        <?php foreach ($_SESSION['mH'] as $item) { ?>
        <tr>
            <td><?php echo $item['0']?></td>
            <td><?php echo $item['1']?></td>
            <td><?php echo $item['2']?></td>
            <td><?php echo $item['3']?></td>
        </tr>
        <?php  } ?>
    </table>
</body>
