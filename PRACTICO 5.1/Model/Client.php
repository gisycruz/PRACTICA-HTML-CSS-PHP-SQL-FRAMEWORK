<?php

namespace model;

use model\Person as Person;

class Client extends Person{

    private $userName;
    private $password;

    public function __construct()
    {
    }

    
    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}

?>