<?php
// PHP toString magick method
class Color{
    public $color;
    function __construct($color)
    {
        $this->color = $color;
    }

    function setColor($color){

        $this->color = $color;
    }

    function __toString()
    {
        return "The color is {$this->color}";
    }
}

$c = new Color('Red');
echo $c;

// $c->setColor('GREEN');
// echo $c->color;


// Comparing Object;
echo "\n === \n # Comparing Object \n===\n";

class Planet{
    public $name;
    function __construct($name)
    {
        $this->name = $name;        
    }
}

$e = new Planet("Earth");
$e2 = $e;
$e1 = new Planet("Earth");
$m = new Planet("Mars");

if($e1 === $e2){
    echo "Similar Planets";
}else{
    echo "Not Similar";
}


