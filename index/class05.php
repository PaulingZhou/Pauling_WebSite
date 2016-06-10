<?php
abstract class ACanEat{
    abstract function eat($food);

    public function breath(){
        echo "Breath use the air.<br />";
    }
}

class Human extends ACanEat{
    public function eat($food){
        echo "Human eating ".$food."<br />";
    }
}
?>
