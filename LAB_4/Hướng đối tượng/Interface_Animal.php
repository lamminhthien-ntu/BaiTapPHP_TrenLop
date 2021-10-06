<?php
interface Interface_Animal{
    function makeSound();
}

class Cat implements Interface_Animal
{
    public function makeSound()
    {
        echo "meo meo";
    }
}
Class Dog implements Interface_Animal{
    function makeSound()
    {
        echo "Gau gau";
    }

}

$cat = new Cat();
$dog = new Dog();
$animals = array($cat,$dog);
foreach ($animals as $animal)
{
    $animal->makeSound();
    echo "<br>";
}


?>