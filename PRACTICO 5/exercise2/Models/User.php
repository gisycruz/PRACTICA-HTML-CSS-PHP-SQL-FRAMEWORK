<?php 
namespace Models;

class User {
    private $UserName;
    private $password;
    private $firstName;
    private $lastName;
    private $email;
    

    public function __construct($UserName,$password,$firstName,$lastName,$email)
    {
        $this->UserName =$UserName;
        $this->password = $password;
        $this->firstName =$firstName;
        $this->lastName =$lastName;
        $this->email = $email;
    }

   
    public function getUserName()
    {
        return $this->UserName;
    }

    public function setUserName($UserName)
    {
        $this->UserName = $UserName;

    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firtName)
    {
        $this->firstName = $firstName;

    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

    }
}

?>