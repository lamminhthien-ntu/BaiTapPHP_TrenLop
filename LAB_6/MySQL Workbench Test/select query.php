<?php
include('connection.php');
$query = "SELECT `nhanvien`.`MANV`,     `nhanvien`.`HOTEN`,     `nhanvien`.`NGAYSINH`,     `nhanvien`.`GIOITINH`,     `nhanvien`.`DIACHI`,     `nhanvien`.`ANH`,     `nhanvien`.`MALOAINV`,     `nhanvien`.`MAPHONG` FROM `qlnv`.`nhanvien";



    $stmt->execute();
    $stmt->bind_result($MANV, $HOTEN, $NGAYSINH, $GIOITINH, $DIACHI, $ANH, $MALOAINV, $MAPHONG);
    while ($stmt->fetch()) {
        printf("%s, %s, %s, %s, %s, %s, %s, %s\n", $MANV, $HOTEN, $NGAYSINH, $GIOITINH, $DIACHI, $ANH, $MALOAINV, $MAPHONG);
    }
    $stmt->close();




}