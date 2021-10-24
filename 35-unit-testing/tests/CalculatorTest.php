<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;
require("src/Calculator.php")

class CalculatorTest extends TestCase{

    private $calc;
    protected function setUp():void{
        $this->calc = new Calculator();
    }

    function testAdditionOfTwoNumbers() {
        $result = $this->calc->add(2,3);
        $this->assertEquals(5, $result);
    }

    function testAdditionOfMultipleNumbers() {
        $result = $this->calc->add(2,3,4,6);
        $this->assertEquals(15, $result);
    }

    
}

// ./vendor/bin/phpunit tests |=> run this commend