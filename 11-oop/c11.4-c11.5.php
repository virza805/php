<?php  
// Descus public - private
class Fund{
    private $fund;

    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
        //  $this->deductFund(7);
    }

    private function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
// $ourFund->fund = 75;
$ourFund->getTotal();
$ourFund->addFund(15);
$ourFund->getTotal();
// $ourFund->deductFund(5);
$ourFund->getTotal();
echo PHP_EOL."<====# Sampol Project #====> ".PHP_EOL;

class RGB{
    private $color; // #ffef27
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    public function getColor(){
        return $this->color;
    }

    public function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }

    public function readRGBColor(){
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }

    public function setColor($colorCode){
        $this->color = ltrim($colorCode,"#");
        $this->parseColor();
    }

    private function parseColor(){
        if($this->color){
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x'); //$colors
            // print_r($colors);
        }else{
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
    }

    public function getRed(){
        return $this->red;
    }

    public function getGreen(){
        return $this->green;
    }

    public function getBlue(){
        return $this->blue;
    }
}

$myColor = new RGB("#ffef27");
$myColor->readRGBColor();