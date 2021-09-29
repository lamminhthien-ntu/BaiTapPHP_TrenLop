<?php
isset($_GET["so2"]) ? $so2 = $_GET["so2"] : $so2 = "";
isset($_GET['so1']) ? $so1 = $_GET['so1'] : $so1 = "";
isset($_GET['pheptinh']) ? $pheptinh = $_GET['pheptinh'] : $pheptinh = "";


if (is_numeric($so1) && is_numeric($so2)) {
    switch ($pheptinh) {
        case "+":
            $pheptinh = "Cộng";
            $ketqua =  $so1 + $so2;
            break;
        case "-":
            $pheptinh = "Trừ";
            $ketqua =  $so1 - $so2;
            break;
        case "*":
            $pheptinh = "Nhân";
            $ketqua =  $so1 * $so2;
            break;
        case "/":
            $pheptinh = "Chia";
            $ketqua =  $so1 / $so2;
            break;
        default:
            $pheptinh ="";
            $ketqua =  "Toán hạng không hợp lệ";
    }
}
?>

<style>
    body {
        text-align: center;
    }

    label {
        font-size: 20;
        font-weight: bold;
        color: blue;
    }

    #pheptinh {
        font-size: 20;
        font-weight: bold;
        color: yellowgreen;
    }
</style>
<h2>PHÉP TÍNH TRÊN HAI SỐ </h2>
<form action="Bai3.php" method="get" enctype="multipart/form">
    <label>Chọn phép tính: </label>
    <label id="pheptinh">Cộng </label>
    <input type="radio" name="pheptinh" value="+" label="Cộng">
    <label  id="pheptinh">Trừ </label>
    <input type="radio" name="pheptinh" value="-" label="Trừ">
    <label id="pheptinh">Nhân </label>
    <input type="radio" name="pheptinh" value="*" label="Nhân">
    <label id="pheptinh">Chia </label>
    <input type="radio" name="pheptinh" value="/" label="Chia"> <br><br>
    <label>Số thứ nhất: </label>
    <input type="text" name="so1" value="<?php echo $so1; ?>"><br><br>
    <label>Số thứ hai: </label>
    <input type="text" name="so2" value="<?php echo $so2; ?>"><br><br>
    <input type="submit" value="Tính"><br><br>
    <?php
    if (isset($ketqua)) {
        echo "<label> Kết quả phép $pheptinh </label> : <input type='text' value='$ketqua' disabled>";
    } else
        echo "<label>Dữ liệu  chưa phù hợp</lable>";
    ?>
</form>
<a href="javascript:window.history.back(-1);">Trở về trang trước</a>