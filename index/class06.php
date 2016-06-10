<?php
interface ICanEat{
    public function eat($food);
} 

class Human implements ICanEat{
    public function eat($food){
        echo "I can eat ".$food."<br />";
    }
}

$zhou = new Human();
$zhou->eat("apple");
?>
