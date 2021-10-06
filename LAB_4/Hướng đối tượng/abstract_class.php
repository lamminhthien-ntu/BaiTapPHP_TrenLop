<?php
abstract  class HinhHoc {
    abstract  public  function Ve();

    abstract  public  function  tinh_Dien_Tich();


}

class  HinhVuong extends HinhHoc {
    public $canh =5;
    public function Ve()
    {
        echo "Vẽ hình vuông";
    }

    public function tinh_Dien_Tich()
    {
        return $this->canh*$this->canh;
    }

}

class HinhChuNhat extends HinhHoc {
    public $dai = 3;
    public $rong = 5;
    public function Ve()
    {
        echo "Vẽ hình chữ nhật";
    }

    public function tinh_Dien_Tich()
    {
        return $this->dai*$this->rong;
    }

}

$hinhchunhat1= new HinhChuNhat();
$hinhvuong1 = new HinhVuong();

echo $hinhchunhat1->Ve();
echo "<br>Diện tích hình chữ nhật là".$hinhchunhat1->tinh_Dien_Tich()."<br>";

echo  $hinhvuong1->Ve();
echo  "<br>Diện tích hình vuông là".$hinhvuong1->tinh_Dien_Tich()."<br>";



?>