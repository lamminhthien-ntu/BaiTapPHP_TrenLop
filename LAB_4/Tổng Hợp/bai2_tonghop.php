<?php
$sum ="";
$mang_tho="";
if (isset($_POST['mang_tho'])) $mang_tho = $_POST['mang_tho'];
trim($mang_tho," ");
$tach_mang = explode(",",$mang_tho);
echo  var_dump($tach_mang);

$sum = 0;
if (isset($_POST['mang_tho'])) {
    foreach ($tach_mang as $value)
    {
        $sum += $value;
    }
}
echo  $sum;

?>
<form method="post" action="bai2_tonghop.php">
    <h1>Nhập và tính trên dãy số</h1>
    Nhập dãy số: <input type="text" name="mang_tho"><br>
    <input type="submit" value="Tổng dãy số"><br>
    Tổng dãy số: <input type="text" disabled value="<?php echo $sum; ?>">
</form>
