<?php
isset($_GET["so2"]) ? $so2 = $_GET["so2"] : $so2 = "";
isset($_GET['so1']) ? $so1 = $_GET['so1'] : $so1 = "";
isset($_GET['pheptinh']) ? $pheptinh = $_GET['pheptinh'] : $pheptinh = "";


if (is_numeric($so1) && is_numeric($so2)) {
    switch ($pheptinh) {
        case "+":
            $ketqua =  $so1 + $so2;
            break;
        case "-":
            $ketqua =  $so1 - $so2;
            break;
        case "*":
            $ketqua =  $so1 * $so2;
            break;
        case "/":
            $ketqua =  $so1 / $so2;
            break;
        default:
            $ketqua =  "Toán hạng không hợp lệ";
    }
}

?>
<h2>Phép tính trên hai số </p>
    <form action="Bai3.php" method="get" enctype="multipart/form">
        <label>Chọn phép tính: </label>
        <label>Cộng </label>
        <input type="radio" name="pheptinh" value="+" label="Cộng">
        <label>Trừ </label>
        <input type="radio" name="pheptinh" value="-" label="Trừ">
        <label>Nhân </label>
        <input type="radio" name="pheptinh" value="*" label="Nhân">
        <label>Chia </label>
        <input type="radio" name="pheptinh" value="/" label="Chia"> <br><br>
        <label>Số thứ nhất: </label>
        <input type="text" name="so1"><br><br>
        <label>Số thứ hai: </label>
        <input type="text" name="so2"><br><br>
        <input type="submit" value="Tính"><br><br>
        <?php
        if (isset($ketqua)) {
            echo "<input type='text' value='$ketqua' disabled>";
        }
        else
        echo "<input type='text' value='Dữ liệu  chưa phù hợp' disabled>";
        ?>
    </form>