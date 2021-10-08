<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tinh chu vi va dien tich</title>
    <style>
        fieldset {
            background-color: #eeeeee;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
        }

        input {
            margin: 5px;
        }
    </style>
</head>
<body>
<?php
abstract class Hinh{
    protected $ten, $dodai;
    public function setTen($ten){
        $this->ten=$ten;
    }
    public function getTen(){
        return $this->ten;
    }
    public function setDodai($doDai){
        $this->dodai=$doDai;
    }
    public function getDodai(){
        return $this->dodai;
    }
    abstract public function tinh_CV();
    abstract public function tinh_DT();
}

class HinhTron extends Hinh{
    const PI=3.14;
    function tinh_CV(){
        return $this->dodai*2*self::PI;
    }
    function tinh_DT(){
        return pow($this->dodai,2)*self::PI;
    }
}

class HinhVuong extends Hinh{
    public function tinh_CV(){
        return $this->dodai*4;
    }
    public function tinh_DT(){
        return pow($this->dodai,2);
    }
}

class HinhChuNhat  extends Hinh{
    public function tinh_CV(){
        //Hình chữ nhật có 2 cạnh a,b ta tách nó ra bằng hàm explode
        $doDaiCacCanh = explode(",", $this->dodai);

      if (count($doDaiCacCanh)==2)
          return $doDaiCacCanh[0]+$doDaiCacCanh[1];
      else return "Bạn nhập dư hoặc không đúng cú pháp dữ liệu";

    }

    public function tinh_DT(){
        //Hình chữ nhật có 2 cạnh a,b ta tách nó ra bằng hàm explode
        $doDaiCacCanh = explode(",", $this->dodai);

        if (count($doDaiCacCanh)==2)
            return $doDaiCacCanh[0]*$doDaiCacCanh[1];
        else return "Bạn nhập dư hoặc không đúng cú pháp dữ liệu";

    }
}

class HinhTamGiac  extends Hinh{
    public function tinh_CV(){
        //Hình chữ nhật có 2 cạnh a,b ta tách nó ra bằng hàm explode
        $doDaiCacCanh = explode(",", $this->dodai);

        if (count($doDaiCacCanh)==3)
            return $doDaiCacCanh[0]+$doDaiCacCanh[1]+$doDaiCacCanh[2];
        else return "Bạn nhập dữ liệu dư hoặc không đúng cú pháp dữ liệu";

    }

    public function tinh_DT(){
        //Hình chữ nhật có 2 cạnh a,b ta tách nó ra bằng hàm explode
        $doDaiCacCanh = explode(",", $this->dodai);
        $nuaChuVi=($doDaiCacCanh[0]+$doDaiCacCanh[1]+$doDaiCacCanh[2])/2;
        if (count($doDaiCacCanh)==3)
            return sqrt($nuaChuVi*($nuaChuVi-$doDaiCacCanh[0])*($nuaChuVi-$doDaiCacCanh[1])*($nuaChuVi-$doDaiCacCanh[2]));
        else return "Bạn nhập dư hoặc không đúng cú pháp dữ liệu";

    }
}

class HinhTamGiacDeu  extends Hinh{
    public function tinh_CV(){
        //Hình chữ nhật có 2 cạnh a,b ta tách nó ra bằng hàm explode
        $doDaiCacCanh = explode(",", $this->dodai);

        if (count($doDaiCacCanh)==1)
            return $doDaiCacCanh[0]*3;
        else return "Bạn nhập dữ liệu dư hoặc không đúng cú pháp dữ liệu";

    }

    public function tinh_DT(){
        //Hình chữ nhật có 2 cạnh a,b ta tách nó ra bằng hàm explode
        $doDaiCacCanh = explode(",", $this->dodai);
        $nuaChuVi=($doDaiCacCanh[0]*3)/2;
        if (count($doDaiCacCanh)==1)
            return sqrt($nuaChuVi*($nuaChuVi-$doDaiCacCanh[0])*($nuaChuVi-$doDaiCacCanh[0])*($nuaChuVi-$doDaiCacCanh[0]));
        else return "Bạn nhập dư hoặc không đúng cú pháp dữ liệu";

    }
}



$str=NULL;
if(isset($_POST['tinh'])){
    if(isset($_POST['hinh']) && ($_POST['hinh'])=="hv"){
        $hv=new HinhVuong();
        $hv->setTen($_POST['ten']);
        $hv->setDodai($_POST['dodai']);
        $str= "Diện tích hình vuông ".$hv->getTen()." là : ".$hv->tinh_DT()." \n".
            "Chu vi của hình vuông ".$hv->getTen()." là : ".$hv->tinh_CV();
    }
    if(isset($_POST['hinh']) && ($_POST['hinh'])=="ht"){
        $ht=new HinhTron();
        $ht->setTen($_POST['ten']);
        $ht->setDodai($_POST['dodai']);
        $str= "Diện tích của hình tròn ".$ht->getTen()." là : ".$ht->tinh_DT()." \n".
            "Chu vi của hình tròn ".$ht->getTen()." là : ".$ht->tinh_CV();
    }
    if(isset($_POST['hinh']) && ($_POST['hinh'])=="hcn"){
        $hcn=new HinhChuNhat();
        $hcn->setTen($_POST['ten']);
        $hcn->setDodai($_POST['dodai']);
        $str= "Diện tích của hình chữ nhật ".$hcn->getTen()." là : ".$hcn->tinh_DT()." \n".
            "Chu vi của hình chữ nhật ".$hcn->getTen()." là : ".$hcn->tinh_CV();
    }
    if(isset($_POST['hinh']) && ($_POST['hinh'])=="htg"){
        $htg=new HinhTamGiac();
        $htg->setTen($_POST['ten']);
        $htg->setDodai($_POST['dodai']);
        $str= "Diện tích của hình tam giác thường ".$htg->getTen()." là : ".$htg->tinh_DT()." \n".
            "Chu vi của hình tam giác thường ".$htg->getTen()." là : ".$htg->tinh_CV();
    }
    if(isset($_POST['hinh']) && ($_POST['hinh'])=="htgd"){
        $htgd=new HinhTamGiac();
        $htgd->setTen($_POST['ten']);
        $htgd->setDodai($_POST['dodai']);
        $str= "Diện tích của hình tam giác đều ".$htgd->getTen()." là : ".$htgd->tinh_DT()." \n".
            "Chu vi của hình tam giác đều ".$htgd->getTen()." là : ".$htgd->tinh_CV();
    }
}
?>
<form action="" method="post">
    <fieldset>
        <legend>Tính chu vi và diện tích các hình đơn giản</legend>
        <table border='0'>
            <tr>
                <td>Chọn hình</td>
                <td><input type="radio" name="hinh" value="hv"
                        <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="hv") echo 'checked'?>/>Hình vuông
                    <input type="radio" name="hinh" value="ht"
                        <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="ht") echo 'checked'?>/>Hình tròn
                    <input type="radio" name="hinh" value="hcn"
                        <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="hcn") echo 'checked'?>/>Hình chữ nhật
                    <input type="radio" name="hinh" value="htg"
                        <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="htgt") echo 'checked'?>/>Hình tam giác thường
                    <input type="radio" name="hinh" value="htgd"
                        <?php if(isset($_POST['hinh'])&&($_POST['hinh'])=="htgd") echo 'checked'?>/>Hình tam giác đều
                </td>
            </tr>
            <tr>
                <td>Nhập tên:</td>
                <td><input type="text"  name="ten" value="<?php if(isset($_POST['ten'])) echo $_POST['ten'];?>"/></td>
            </tr>
            <tr>
                <td>Nhập độ dài:</td>
                <td><input type="text"  name="dodai" value="<?php if(isset($_POST['dodai'])) echo $_POST['dodai'];?>"/></td>
            </tr>
            <tr><td>Kết quả:</td>
                <td><textarea name="ketqua" cols="70" rows="4" disabled="disabled"><?php echo $str;?></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="tinh" value="TÍNH"/></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>

