<?php
interface water{
    public function makeItWet();
}
class weather{
    public function start(){
        return 'Here is some weather';
    }
}
class rain extends weather implements water{
    public function makeItWet(){
        return 'It is wet';
    }
}
$a = new rain();
echo $a->start();
echo $a->makeItWet()
?>