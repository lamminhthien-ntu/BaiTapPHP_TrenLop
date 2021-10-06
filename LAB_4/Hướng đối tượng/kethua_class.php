<?php
class HinhHoc {
    public function Ve() {
        echo "Vẽ hình";
    }
    public function tinh_Dien_Tich(){
        echo "Tính diện tích";
    }
}

class HinhVuong extends HinhHoc{
    public $canh = 0;

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
    public $dai = 0;
    public  $rong = 0;
    public function Ve()
    {
      echo  "Vẽ hình vuông";
    }

    public function tinh_Dien_Tich()
    {
        return $this->dai*$this->rong;
    }

}

//Hình chữ nhật

$hinhchunhat_1 = new HinhChuNhat();
$hinhchunhat_1->Ve();
$hinhchunhat_1->rong = 25;
$hinhchunhat_1->dai=19;
echo "<br>Diện tích hình chữ nhật: ".$hinhchunhat_1->tinh_Dien_Tich()."<br>";
//Hình vuông

$hinhvuong_1 = new HinhVuong();
$hinhvuong_1->Ve();
$hinhvuong_1->canh = 5;
echo  "<br>Diện tích hình vuông: ".$hinhvuong_1->tinh_Dien_Tich()."<br>";


?>