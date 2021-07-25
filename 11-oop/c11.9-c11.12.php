<?php

abstract class Shapali{ // must be implement of child class
    abstract function getArea();
    abstract function getPerimeter(); 
}

class Rectangles extends Shapali{
    private $base, $height;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function getArea(){
        return $this->base*$this->height;
    }
    public function getPerimeter(){

    }
}

class Triangles extends Shapali{

    public function getArea(){
        return $this->base*$this->height;
    }
    public function getPerimeter(){

    }
}
echo "Another example of abstract\n"; 

abstract class OurClass{
    function sayHi(){
        echo "Hi";
    }

    abstract function eat($v1, $v2=0);
}

class MyClass extends OurClass{
    function eat($m, $x=5){
        echo "I am eating";
    }
}

$mc = new MyClass();
$mc->eat(1,3);
echo "\n How to write better code by force \n"; 
class Shape{

}
class Shapes{
    private $shapes;
    function __construct()
    {
        $this->shapes = array();
    }

    function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }

    function totalShape(){
        return count($this->shapes);
    }
}

class Rectangle extends Shape{

}

class Triangle extends Shape{

}

class Student{

}

$shapesCollection = new Shapes();
$shapesCollection->addShape(new Rectangle());
$shapesCollection->addShape(new Triangle());
// $shapesCollection->addShape(new Student());
echo $shapesCollection->totalShape();

// class 11.10 =  final  
echo "\n final \n"; 

// class OurClas{
//     final function doSomething(){
//         echo "Doing Something";
//     }
// }

// class MyClass extends OurClas{
//     function doSomething(){
//         echo "Doing Something";
//     }
// }

// $mc = new MyClass();
// $mc->doSomething();





// Interface  
echo "\n interface as like abstract class \n"; 

interface BaseAnimal{
    function isAlive();
    function canEat($param1,$param2);
    function breed();
}

class Animal implements BaseAnimal{ // class extends kora na interface ka | implements korta hoy
    function isAlive(){}
    function canEat($param1,$param2){}
    function breed(){}
}
interface BaseHuman extends BaseAnimal{ // interface extends kora interface ka 
    function canTalk();
}

class Human implements BaseHuman{ // class extends kora na interface ka | implements korta hoy
    function isAlive(){}
    function canEat($param1,$param2){}
    function breed(){}
    function canTalk(){}
}

$cat = new Animal();
echo $cat instanceof Human;

$h = new Human();
// echo $h instanceof BaseHuman;
