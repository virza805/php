<?php 
// class-object-method-propati
class Human { // this is class
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    function sayName(){
        echo "My Name is {$this->name}\n";
    }
}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}

class Dog{
    function sayHi(){
        echo "Woof\n";
    }
}

$h1 = new Human(); // this is object
$h2 = new Human(); 
$h1->name = "Rubel"; // set 
$h2->name = "Tanvir"; 

$h1->sayName();
//  echo $h1->name; // get
$h2->sayHi();

echo PHP_EOL;

class Humans{
    public $name;
    public $age;
    public function __construct($personName, $personAge = 0)
    {
        $this->name = $personName;
        $this->age = $personAge;
    }

    public function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }

    public function sayName(){
        if($this->age){
            echo "My Name is {$this->name}, I am {$this->age} years old\n";
        }else{
            echo "My Name is {$this->name}, I don't know how old I am ?\n";
        }
    }
}

$h4 = new Humans("Tanvir", 21);
$h5 = new Humans("Hasan", 24);
$h6 = new Humans("Md. Al-Amin");

$h4->sayHi();
$h5->sayHi();
$h6->sayHi();