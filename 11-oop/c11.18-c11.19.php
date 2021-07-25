<?php
// OOP main purpose. we can write that readable, manageable, maintainable code.

class DistrictCollection implements IteratorAggregate{ // iterator aggregate = পুনরাবৃত্তি সমষ্টি
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts,$district);
    }

    // function getDistricts(){
    //     return $this->districts;
    // }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add("Dhaka");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Chittagong");
$districts->add("Rajshahi");
$districts->add("Comilla");

foreach($districts as $district){
    echo $district."\n";
}

// if i wont to count Districts;
echo "\n======\n # count Districts \n====== \n";
class DistrictCollections implements IteratorAggregate, Countable{
    private $districts;

    function __construct()
    {
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts,$district);
    }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }

    function count(){
        return count($this->districts);
    }
}

$districts = new DistrictCollections;
$districts->add("Dhaka");
$districts->add("Bogra");
$districts->add("Sylhet");
$districts->add("Chittagong");
$districts->add("Rajshahi");
$districts->add("Comilla");

echo count($districts);