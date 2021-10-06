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

<head>
    <link rel="stylesheet" href="../../Thien_Lib/thien_style.css">
</head>

<form method="post" action="bai2_tonghop.php" class="background-blue margin-center border-rounded border-blue">
    <h1>Nhập và tính trên dãy số</h1>
    Nhập dãy số: <input type="text" name="mang_tho" class="border-blue text-style text-red"><br>
    <input type="submit" value="Tổng dãy số" class="border-violet text-style text-red" ><br>
    Tổng dãy số: <input type="text" class="border-blue text-red" disabled value="<?php echo $sum; ?>">
</form>
