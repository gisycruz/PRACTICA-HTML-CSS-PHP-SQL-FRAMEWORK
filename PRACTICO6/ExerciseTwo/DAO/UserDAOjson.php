<?php 
namespace DAO;

use Models\User as User;
use DAO\IUserDAO as IUserDAO;

class UserDAOjson implements IUserDAO{

    private $fileName;
    private $listUser = array();



    public function __construct()
    {
        $this->fileName = ROOT."Data/clientusers.json";
    }

    public function getUserName($userName){

        $arrayUser = $this->getAllUsers();
         
        $userResul = null;

        foreach($arrayUser as $user){

            if($user->getUserName() == $userName){

                   $userResul = $user;
            }

        }
        return $userResul;
    }

    public  function getAllUsers(){

        $this->RetrieveData();

        return $this->listUser;
    }
    
    private function RetrieveData()
    {
        $this->listUser = array();

        if(file_exists($this->fileName))
        {
            $jsonContent = file_get_contents($this->fileName);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $user = new User();
                $user->setUserName($valuesArray["username"]);
                $user->setPassword($valuesArray["password"]);
            

                array_push($this->listUser,$user);
            }
        }
    }
}
?>