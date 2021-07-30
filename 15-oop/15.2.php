<?php 
// depandince ingaction

interface BaseStudent{
    function displayName();

}

class ImproveStudent implements BaseStudent{
    private $name;
    private $tital;
    function __construct($name, $tital)
    {
        $this->name = $name;
        $this->tital = $tital;
    }
    function displayName(){
        echo "Hello From {$this->tital} {$this->name}";
    }
}
class Student implements BaseStudent{
    private $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function displayName(){
        echo "Hello From ".$this->name;
    }
}

// class StudentManager{
//     function introduceStudent($name){
//         $st = new Student($name);
//         $st->displayName();
//     }
// }


class StudentManager{
    function introduceStudent(BaseStudent $student){ //Only allow who are use BaseStudent interface
        $student->displayName();
    }
}

// $sm = new StudentManager();
// $sm->introduceStudent("Tanvir Md. Al-Amin");
$ist = new ImproveStudent("Md. Al-Amin", "Tanvir");
$st = new Student("Tanvir Hasan");
$sm = new StudentManager();
$sm->introduceStudent($ist);



