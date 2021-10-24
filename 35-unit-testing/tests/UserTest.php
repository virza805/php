<?php 
use PHPUnit\Framework\TestCase;
class UserTest extends TestCase{

    private $user;
    protected function setUp(): void
    {
        $this->user = new App\Models\User("Bill","Gates");
    }
    function testGetFirstName(){
        $firstName = $this->user->getFirstName();
        $this->assertEquals("Bill", $firstName);
    }
    function testSetFirstName(){
        $this->user->setFirstName("Tanvir");
        $firstName = $this->user->getFirstName("Tanvir");
        $this->assertEquals("Tanvir", $firstName);
    }
}




