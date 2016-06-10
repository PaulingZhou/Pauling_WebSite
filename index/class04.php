<?php

interface ICanEat{
    public function eat($food);
}

class Human implements ICanEat{
    public function eat($food){
        echo "Human eating ".$food."<br />";
    }
}

class Animal implements ICanEat{
    public function eat($food){
        echo "Animal eating ".$food."<br />";
    }
}

$obj = new Human();
$obj->eat("apple");

$monkey = new Animal();
$monkey->eat("banana");

var_dump($obj instanceof ICanEat);
?>
