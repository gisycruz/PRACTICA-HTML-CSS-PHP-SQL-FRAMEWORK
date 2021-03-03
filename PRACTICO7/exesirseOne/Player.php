<?php 

class Player{

    private $codePlayer;
    private $firstName;
    private $lastName;
    private $email;
    private $hoursPlayer;
    

    public function __construct($codePlayer,$firstName,$lastName,$email,$hoursPlayer)
    {
        $this->codePlayer =$codePlayer;
        $this->firstName =$firstName;
        $this->lastName =$lastName;
        $this->email =$email;
        $this->hoursPlayer =$hoursPlayer;
    }


    public function getCodePlayer()
    {
        return $this->codePlayer;
    }
    public function setCodePlayer($codePlayer)
    {
        $this->codePlayer = $codePlayer;

   }
    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
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

    public function getHoursPlayer()
    {
        return $this->hoursPlayer;
    }

    public function setHoursPlayer($hoursPlayer)
    {
        $this->hoursPlayer = $hoursPlayer;

    }
}


?>