<?php
trait MyTrait {
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;

    function sayHi(){
        echo "Hi";
    }
}
class MyClassB{
    use MyTrait;

    function sayHi(){
        echo "Hi++";
    }
}

MyClassA::$number = 2;
MyClassB::$number = 8;
echo MyClassA::$number;

$na = new MyClassA();
$nb = new MyClassB();
echo $na::$number;
