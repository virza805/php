<?php  
namespace App\Models;
class User{
    private $fname, $lname;

    function __construct($fname, $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
    }
    public function getFirstName(){
        return $this->fname;
    }
    public function setFirstName($fname){
        return $this->fname;
    }
}

// TDD = Test Driven Development
// TDD for 2 target
# Test First
#


