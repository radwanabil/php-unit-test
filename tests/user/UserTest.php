<?php
use PHPUnit\Framework\TestCase;
require './src/User.php';
class UserTest extends TestCase{
    
    public function testCanCreateUser()
    {
        $user = new User('Student', 'student@example.com');

        $this->assertInstanceOf(User::class, $user);
    }
    
    public function testCanGetUserName1()
    {
        $user = new User('John Doe', 'johndoe@example.com');

        $this->assertEquals('John Doe', $user->getName());
    }

    
    public function testCanGetUserName2()
    {
        $user = new User();

        $this->assertEquals('student', $user->getName());
    }
    
    public function testCanSetUserName()
    {
        $user = new User();

        $user->setName('radwa');

        $this->assertEquals('radwa', $user->getName());
    }
    
    public function testCanGetEmail1()
    {
        $user = new User();

        $this->assertEquals('student@yahoo.com', $user->getEmail());
    }
    public function testCanSetUserEmail()
    {
        $user = new User();

        $user->setEmail('jane@yahoo.com');

        $this->assertEquals('jane@yahoo.com', $user->getEmail());
    }

}

?>