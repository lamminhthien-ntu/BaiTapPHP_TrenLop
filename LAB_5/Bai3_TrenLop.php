<?php
include ('../../BaiTapPHP_TrenLop/Thien_Lib/thien_framework.php');

class People {
    private $hoTen;
    private $diaChi;
    private $gioiTinh;


    /**
     * @param $hoTen
     * @param $diaChi
     * @param $gioiTinh
     */

    /**
     * @return mixed
     */
    public function getHoTen()
    {
        return $this->hoTen;
    }

    /**
     * @return mixed
     */
    public function getDiaChi()
    {
        return $this->diaChi;
    }

    /**
     * @return mixed
     */
    public function getGioiTinh()
    {
        return $this->gioiTinh;
    }

    /**
     * @param mixed $hoTen
     */
    public function setHoTen($hoTen)
    {
        $this->hoTen = $hoTen;
    }

    /**
     * @param mixed $diaChi
     */
    public function setDiaChi($diaChi)
    {
        $this->diaChi = $diaChi;
    }

    /**
     * @param mixed $gioiTinh
     */
    public function setGioiTinh($gioiTinh)
    {
        $this->gioiTinh = $gioiTinh;
    }


}

class Teacher extends People {
    private $trinhDo;
    const luongCoBan = 1500000;

    public  function tinhLuongCoBan()
    {

        if ($this->trinhDo=="Cử Nhân")
        {
            return self::luongCoBan*2.34;
        }
        if ($this->trinhDo=="Thạc Sĩ")
        {
            return self::luongCoBan*3.67;
        }
        if ($this->trinhDo=="Tiến Sĩ")
        {
            return self::luongCoBan*5.66;
        }
        return  self::luongCoBan;
    }

    /**
     * @return mixed
     */
    public function getTrinhDo()
    {
        return $this->trinhDo;
    }

    /**
     * @param mixed $trinhDo
     */
    public function setTrinhDo($trinhDo)
    {
        $this->trinhDo = $trinhDo;
    }

    /**
     * @return mixed
     */



}


class Student extends People {
    private $nganhHoc;

    public function DiemThuong()
    {
        if ($this->nganhHoc=='CNTT') return 1;
        if ($this->nganhHoc=='KT') return 1.5;
        return 0;
    }

    /**
     * @param mixed $lopHoc
     */


    /**
     * @param mixed $nganhHoc
     */
    public function setNganhHoc($nganhHoc)
    {
        $this->nganhHoc = $nganhHoc;
    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getNganhHoc()
    {
        return $this->nganhHoc;
    }




}

$hoTen = KT_InputGET('hoTen');
$diaChi = KT_InputGET('diaChi');
$gioiTinh = KT_InputGET('gioiTinh');
$queQuan = KT_InputGET('queQuan');
$ngheNghiep = KT_InputGET('ngheNghiep');
$temp = KT_InputGET('temp');
var_dump($ngheNghiep);
if ($ngheNghiep == "Giáo Viên")
{
    echo "<br>Bạn đang ở section giáo viên";
    $gv = new Teacher();
    $gv->setHoTen($hoTen);
    $gv->setGioiTinh($gioiTinh);
    $gv->setDiaChi($diaChi);
    $gv->setTrinhDo($temp);
    $str = "Lương của Giáo viên là".$gv->tinhLuongCoBan();
}



if ($ngheNghiep == "Sinh Viên")
{
    echo "<br>Bạn đang ở section sinh viên";
    $sv = new Student();
    $sv->setHoTen($hoTen);
    $sv->setGioiTinh($gioiTinh);
    $sv->setDiaChi($diaChi);
    $sv->setNganhHoc($temp);
    $str = "Điểm Thưởng của Sinh viên là".$sv->DiemThuong();
}



?>

<head>
    <link rel="stylesheet" href="../../BaiTapPHP_TrenLop/Thien_Lib/thien_style.css">
    <script>
        if (document.getElementById("gv").checked == true)  {
            //nếu là gv thì hiện form ngành, đóng form trih
            document.getElementById("nganh").disabled = true;
            document.getElementById("trinhdo").disabled = false;
        }

        if (document.getElementById("sv").checked == true) {
            document.getElementById("nganh").disabled = false;
            document.getElementById("trinhdo").disabled = true;
        }
    </script>
</head>

<form method="get" action="Bai3_TrenLop.php" >
    Họ tên<input type="text" name="hoTen"><br>
   Giới tính <select name="gioiTinh">
        <option value="Nam" selected="selected">Nam</option>
        <option value="Nữ">Nữ</option>
    </select><br>
   <span style="padding-right: 3px">  Nghề nghiệp:  </span>
<!--    Giáo Viên<input type="radio" name="ngheNghiep" id="gv" value="Giáo Viên">-->
<!--    Sinh Viên<input type="radio" name="ngheNghiep" id="sv" value="Sinh Viên"><br>-->
<!--    Nghề Nghiệp <input type="text" name="ngheNghiep">-->
<!--    Trình Độ/Ngành Học <input type="text" name="temp"><br>-->
<!---->
<!--    Trình Độ <select name="temp"  id="trinhdo" >-->
<!--        <option value="Tiến Sĩ" selected="selected">Tiến Sĩ</option>-->
<!--        <option value="Cử Nhân">Cử Nhân</option>-->
<!--        <option value="Thạc Sĩ">Thạc Sĩ</option>-->
<!--        <option value="Đại Học">Đại Học</option>-->
<!--    </select><br>-->
<!---->
<!--    Ngành Học <input type="text" name="temp" id="nganh"><br>-->
<!--    Lương / Điểm Thưởng <input type="text" disabled value="--><?php //if (isset($str)) echo $str; ?><!--"><br>-->
    <input onclick="document.getElementById('ngheNghiep').disabled = false; document.getElementById('charstype').disabled = true;" type="radio" name="type" checked="checked">Chọn nghề nghiệp?
    <!--<input type="text" name="ngheNghiep" id="ngheNghiep" placeholder="should be 5 charecters at least" >-->
    <select name="charstype" id="ngheNghiep">
        <option value="Sinh Viên">Sinh Viên</option>
        <option value="Giáo Viên">Giáo Viên</option>
    </select>
    <br><br>
    <input onclick="document.getElementById('ngheNghiep').disabled = true; document.getElementById('charstype').disabled = false;" type="radio" name="type" value="ngheNghiepurl">random?
    <select name="charstype" id="charstype" disabled="disabled">
        <option value="Cử Nhân">Cử Nhân</option>
        <option value="Thạc Sĩ">Thạc Sĩ</option>
        <option value="Tiến Sĩ">Tiến Sĩ</option>
        <option value="Đại Học">Đại Học</option>
    </select><br>
    <?php if (isset($str)) echo $str; ?>
    <input type="submit" value="Thực thi">
</form>
