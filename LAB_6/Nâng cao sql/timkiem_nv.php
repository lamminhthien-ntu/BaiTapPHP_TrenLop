<?php
include('connect.php');
include('header.php');
session_start();
if (isset($_GET['btn-submit'])) {
    if (isset($_GET['MANV'])) $MANV = $_GET['MANV']; else $MANV = '';
    if (isset($_GET['HOTEN'])) $HOTEN = $_GET['HOTEN']; else $HOTEN = '';
    if (isset($_GET['GIOITINH'])) $GIOITINH = $_GET['GIOITINH']; else $GIOITINH = '';
    if (isset($_GET['DIACHI'])) $DIACHI = $_GET['DIACHI']; else $DIACHI = '';
    if (isset($_GET['MALOAINV'])) $MALOAINV = $_GET['MALOAINV']; else $MALOAINV = '';
    if (isset($_GET['MAPHONG'])) $MAPHONG = $_GET['MAPHONG']; else $MAPHONG = '';
//    $sql = "SELECT * FROM nhanvien WHERE  MANV LIKE '%$MANV%' OR HOTEN LIKE '%$HOTEN%' OR GIOITINH LIKE '%$GIOITINH%' OR DIACHI LIKE '%$DIACHI%' OR MALOAINV LIKE '%$MALOAINV%' OR MAPHONG LIKE '%$MAPHONG%'";
    echo "<p class='non-form center' style='background: #c0ecff; color:#ff020c '>Đã tìm kiếm thành công, mời bạn cuộn trang xuống để xem danh sách đã tra cứu</p>";
}

?>


<h1>Tra cứu nhân viên nâng cao</h1>
<form action="timkiem_nv.php" method="get">
    <!--(`MANV`, `HOTEN`, `NGAYSINH`, `GIOITINH`, `DIACHI`, `ANH`, `MALOAINV`, `MAPHONG`)-->
    <label>Mã nhân viên</label>
    <input type="text" name="MANV">
    <label>Họ tên</label>
    <input type="text" name="HOTEN">
    <label>Giới tính: </label>
    Nam: <input type="radio" name="GIOITINH" value="1" checked>
    Nữ: <input type="radio" name="GIOITINH" value="0"> <br>
    <label>Địa chỉ</label>
    <input type="text" name="DIACHI">
    <label>Loại nhân viên</label>
    <select name="MALOAINV">
        <?php
        $row_sql = "SELECT * FROM loainv";
        $row_thuchien = mysqli_query($conn, $row_sql);
        while ($dulieu = mysqli_fetch_array($row_thuchien)) {
            $value = $dulieu['MALOAINV'];
            $name = $dulieu['TENLOAINV'];
            ?>
            <?php
            echo "<option value='$value' selected>$name</option>";
        }
        ?>
    </select>
    <label>Phòng ban</label>
    <select name="MAPHONG">
        <?php
        $row_sql = "SELECT * FROM phongban";
        $row_thuchien = mysqli_query($conn, $row_sql);
        while ($dulieu = mysqli_fetch_array($row_thuchien)) {
            $value = $dulieu['MAPHONG'];
            $name = $dulieu['TENPHONG'];
            ?>
            <?php
            echo "<option value='$value' selected>$name</option>";
        }
        ?>
    </select>
    <input type="submit" value="Tra cứu" name="btn-submit">

</form>
<div class="container">
    <div class="row">
        </button>
        <table class="table">
            <thead>
            <tr>

                <th>ID</th>
                <th>Họ và tên</th>
                <th>Ngay sinh</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Ảnh</th>
                <th>loại nhân viên</th>
                <th>phòng</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                if (isset($_GET['btn-submit']))
                {

                $row_sql = "SELECT * FROM nhanvien WHERE  MANV LIKE '%$MANV%' OR HOTEN LIKE '%$HOTEN%' OR GIOITINH LIKE '%$GIOITINH%' OR DIACHI LIKE '%$DIACHI%' OR MALOAINV LIKE '%$MALOAINV%' OR MAPHONG LIKE '%$MAPHONG%'";
                $row_sql_phongban ="SELECT * FROM phongban WHERE MAPHONG = $MAPHONG";
                $row_sql_loainhanvien = "SELECT * FROM loainv WHERE MALOAINV= $MALOAINV ";
                $row_thuchien = mysqli_query($conn, $row_sql);
                $row_thuchien_phongban = mysqli_query($conn,$row_sql_loainhanvien);
                $row_thuchien_loainhanvien = mysqli_query($conn,$row_sql_phongban);


                echo var_dump($row_sql);
                while ($dulieu = mysqli_fetch_array($row_thuchien)){
                ?>
                <td><?php echo $dulieu['MANV']; ?></td>
                <td><?php echo $dulieu['HOTEN']; ?> </td>
                <td><?php echo $dulieu['NGAYSINH']; ?></td>
                <td><?php echo $dulieu['GIOITINH']; ?></td>
                <td><?php echo $dulieu['DIACHI']; ?></td>
                <td><img src="<?php echo 'uploads/' . $dulieu['ANH']; ?>" alt="Avatar" class="avatar"></td>
                <td><?php echo $dulieu['MALOAINV']; ?></td>
                <td><?php echo $dulieu['MAPHONG']; ?></td>
                <td>
                    <a onclick=" return confirm('bạn có chắc muốn sửa không')"
                       href="sua_nhanvien.php?id=<?php echo $dulieu['MANV'] ?>" title="sửa"><img src="icon/edit.png"
                                                                                                 width="25px">
                    </a>
                </td>
                <td>
                    <a onclick=" return confirm('bạn có chắc muốn xóa không') "
                       href="xoa_nhanvien.php?id=<?php echo $dulieu['MANV']; ?>"><img src='icon/delete.jpg'
                                                                                      width='25px'>
                    </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</div>



