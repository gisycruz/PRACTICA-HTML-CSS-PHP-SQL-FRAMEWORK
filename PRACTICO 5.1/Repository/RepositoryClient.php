<?php 
namespace Repository;

use Repository\IClient as IClient;
use Model\Client as Client;

class RepositoryClient implements IClient{

    private $fileName ;
    private $listClient = array();


    public function __construct()
    {
        $this->fileName = dirname(__DIR__)."/Data/Client.json";
    }

    public function searchUserName($userName){

        $this->RetrieveData();

          $userJson = Null;

        if(!empty($this->listClient)){
            foreach($this->listClient as $client){
                if($client->getUserName() == $userName){
                    $userJson = $client;
                }
            }
        }
        return $userJson;

    }
    public function addClient(Client $client){
        $this->RetrieveData();
        array_push($this->listClient , $client);
        $this->SaveData();
    }
    public function getAllClient(){

        $this->RetrieveData();
        return $this->listClient;
    }


    private function SaveData(){

       $arrayToEncode = array();

       foreach($this->listClient  as $client){
           $valueArray['id'] = $client->getId();
           $valueArray['firstname'] =$client->getFirstname();
           $valueArray['lastName'] =$client->getlastName();
           $valueArray['dni'] = $client->getDni();
           $valueArray['email'] = $client->getEmail();
           $valueArray['userName'] =$client->getUserName();
           $valueArray['password'] = $client->getPassword();

           array_push($arrayToEncode , $valueArray);

       }

       $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);

       file_put_contents($this->fileName, $jsonContent);
    }

    private function RetrieveData(){
            
        $this->listClient =array();

        if(file_exists($this->fileName)){

            $jsonContent = file_get_contents($this->fileName);

            $arrayToEncode = ($jsonContent) ? json_decode($jsonContent,true) : array();

            foreach($arrayToEncode as $valueArray){
                 $client = new Client();
                 $client->setId($valueArray['id']);
                 $client->setFirstname($valueArray['firstname']);
                 $client->setLastName($valueArray['lastName']);
                 $client->setDni($valueArray['dni']);
                 $client->setEmail($valueArray['email']);
                 $client->setUserName($valueArray['userName']);
                 $client->setPassword($valueArray['password']);

                 array_push($this->listClient,$client);

            }
        }


    }

}
?>