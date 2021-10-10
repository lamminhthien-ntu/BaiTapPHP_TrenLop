<?php
if (!isset($_POST['array_current'])){
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
}
else $cars = $_POST['array_current'];

if (isset($_POST['1']) && isset($_POST['2']) && isset($_POST['3'] ))
{
    $so1 = $_POST['1'];
    $so2 = $_POST['2'];
    $so3 = $_POST['3'];
    $car_input = array($so1,$so2,$so3);
    //Thêm array mới vô mảng 2 chiều bằng array pussh
    array_push($cars,$car_input);
}


//In mảng 2 chiều bằng foreach
foreach ($cars as $row) {
    echo $row[0]." ";
    echo $row[1]." ";
    echo $row[2]." ";
    echo  "<br>";
}
?>

<form method="post" action="bai5_tonghop_v2.php">
    <label>1</label><input type="text" name="1"><br>
    <label>2</label><input type="text" name="2"><br>
    <label>3</label><input type="text" name="3"><br>

    <input hidden type="text" name="array_current[]" value="
    <?php var_dump($cars); ?>
">
    <input type="submit" value="Thêm vào mảng bằng mảng session">
</form>
