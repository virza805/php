<?php 
// protected & inheritance

class Animal{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat(){
        echo "{$this->name} is eating\n";
    }

    public function run(){
        echo "{$this->name} is running\n";
    }

    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }

    public function greet(){}
    protected function addTitle($title){
        $this->name = $title." ".$this->name;
    }
}

class Human extends Animal{
    public function greet(){ // this override by Animal greet();
        $this->addTitle("Mr.");
        echo "{$this->name} is says Hi\n";
    }
}
class Cat extends Animal{
    public function greet(){
        echo "{$this->name} is says Meows\n";
    }
}

$rasel = new Human('Rasel');
$rasel->eat();
$rasel->greet();

$cat1 = new Cat('Mene');
$cat1->eat();
$cat1->greet();

// ChildClass relation ParentClass
echo PHP_EOL."ParentClass relation ChildClass\n";

class ParentClass{
    protected $name;
    function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "Hi from {$this->name}\n";
    }
}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi();
        echo "Hello !\n";
    }
}

$cc = new ChildClass("Afroza");

// Example of inheritance
echo PHP_EOL."Example inheritance\n";

class Shape{
    protected $name;
    protected $area;
    public function __construct($name)
    {
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }

    public function calculateArea(){}
}

// child class of shape
class Triangle extends Shape{
    private $a, $b, $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a+$this->b+$this->c)/2;
        $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b)*($perimeter-$this->c));
    }
}
class Rectangle extends Shape {
    private $a, $b;
    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectangle");
    }
    public function calculateArea(){
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle(2, 4);
$r->getArea();

$t = new Triangle(10,12,8);
$t->getArea();
