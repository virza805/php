<?php 

$person = [
    'name' => 'xyz',
    'id' => 'some_id',
    'age' => '17',
    'sex' => 'F'
];

function processMaternityLeave($person) {
    if($person['age']<18) {
        throw new Exception("Too Young");
    }else if('F' == $person['sex']) {
        echo "Processed";
    }else{
        throw new GenderMismatchException($person);
    }
}
class GenderMismatchException extends Exception {
    private $person;
    function __construct($person)
    {
        $this->person = $person;
        parent::__construct("Gender Mismatch\n");
    }
    function getDetaileMessage() {

        echo "Gender Mismatch for Person with ID {$this->person['id']}\n";
    }
}

try {
    processMaternityLeave($person);
} catch (GenderMismatchException $e) {
    echo $e->getMessage();
    echo $e->getDetaileMessage();
} catch (Exception $e) {
    echo "Other Exception\n";
    echo $e->getMessage();
}

