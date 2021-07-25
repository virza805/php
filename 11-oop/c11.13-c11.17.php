<?php
// static 
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        echo self::$name."\n"; // get
        // self::doSomething();
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething(){
        echo " Doing Something\n";
    }

    function factorial($n){
        self::$name = "ABCD"; // set
        self::doSomething();
       // $this->doSomething();
        $this->number = 12;
        echo "Calculating factorial of {$n}\n";
    }
}

$mathc = new MathCalculator();
$mathc->factorial(8);

MathCalculator::fibonacci(7);
echo MathCalculator::$name;

// magick method
echo "\n ====#\n## magick method ##\n#==== \n";

class Student{
    private $name;
    private $age;
    private $class;
    function __construct($name='', $age='', $class='')
    {
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }
    
    public function __get($prop) // This is magick method
    {
        return $this->$prop;
    }
    public function __set($prop, $value) // This is magick method
    {
        $this->$prop = $value;
    }


    // function getName(){
    //     return $this->name;
    // }
    // function setName($name){
    //     return $this->name = $name;
    // }

    // function getAge(){
    //     return $this->age;
    // }
    // function setAge($age){
    //     return $this->age = $age;
    // }

    // function getClass(){
    //     return $this->class;
    // }
    // function setClass($class){
    //     return $this->class = $class;
    // }



}

$R = new Student('Rahim', '18', '10');
// $R  = new Student();
// $R->setName('Tanvir');


$R->name = "Kamal";
echo $R->name;


