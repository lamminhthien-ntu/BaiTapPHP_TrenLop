<?php
abstract class Person
{
    private $fullName;
    private $address;
    private $phone;
    private $email;
    abstract function job();

    function inputInfo()
    {
        $this->fullName = 	"Thích Học Lại";
        $this->address	=	"Sao Hỏa";
        $this->phone	= 	"XXX898800000";
        $this->email	=	"saohoa@saohoa.com";
    }
    function showInfo()
    {
        echo "Họ và Tên:".$this->fullName."<br>";
        echo "Địa chỉ: ".$this->address."<br>";
        echo "Điện thoại: ".$this->phone."<br>";
        echo "Email: ".$this->email."<br>";
    }
}
class Employee extends Person
{
    function inputInfo()
    {
        parent::inputInfo();
    }
    function showInfo()
    {
        parent::showInfo();
    }
    //override phương thức trừu tượng
    function job ()
    {
        echo "Làm công ăn lương";
    }

}
$emp  = new Employee();
$emp->inputInfo();
$emp->showInfo();
$emp->job();


?>