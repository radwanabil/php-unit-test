<?php
class User{
    private $name;
    private $email;
    public function __construct($name="student",$email="student@yahoo.com"){
        $this->name = $name;
        $this->email = $email;
    }
    
    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
   
}

?>