<?php
// Exception
class Student{
    function __construct($name, $age)
    {
        $this->name = $name;
        if($age<4){
            throw new Exception("Too Young", 1001);
        }elseif($age>35){
            throw new Exception("Too Old", 1002);
        }
        $this->age = $age;
    }
}

try {
    $s = new Student('Rahim', 1);
    echo "it will never display";
} catch (Exception $e) {
    echo $e->getCode().":".$e->getMessage();
} // finally{ // ata kom use hoy
//     echo "It will run";
// }

// Change biltine exception of php
echo "\n=== Change Exception ===\n";
class MyException extends Exception{}
class NetworkException extends Exception{}

function testExceptions(){
    throw new NetworkException();
}

try {
    testExceptions();
} catch (MyException $th) {
    echo "MyException Caught";
} catch (NetworkException $th) {
    echo "NetworkException Caught";
} catch (Exception $th) { // as like if(){}elseif(){} but alose finally run
    echo "Exception Caught";
}finally{
    echo "\nCleaned Up";
}

