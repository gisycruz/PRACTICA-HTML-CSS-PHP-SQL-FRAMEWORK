<?php 
namespace Repository;

use Models\Beer as Beer;
use Repository\IBeer as IBeer;

class RepositoryBeer implements IBeer{
  
    private $fileName ;
    private $listBeer = array();
    
    public function __construct()
    {
        $this->fileName = dirname(__DIR__) ."/Data/beer.json";
    }


    private function SaveData(){

        $arrayToEncode = array();

        foreach($this->listBeer  as $beer){
            $valueArray['code'] = $beer->getCode();
            $valueArray['name'] =$beer->getName();
            $valueArray['description'] =$beer->getDescription();
            $valueArray['type'] = $beer->getType();

            array_push($arrayToEncode,$valueArray);
        }
        $jsonContent = json_encode($arrayToEncode,JSON_PRETTY_PRINT);

        file_put_contents($this->fileName ,$jsonContent);
    }

    private function RetrieveData(){

        $this->listBeer = array();

        if(file_exists($this->fileName)){

            $jsonContent = file_get_contents($this->fileName);
            
            $arrayToEncode = ($jsonContent) ? json_decode($jsonContent,true) : array();

            foreach($arrayToEncode as $value){
                
                $beer = new Beer($value['code'],$value['name'],$value['description'],$value['type']);

                array_push($this->listBeer , $beer);
            }

            }
        }
        function getAll(){
           $this->RetrieveData();
           return $this->listBeer; 
        }
        function add(Beer $beer){
            $this->RetrieveData();//trae del archivo carga lista de array en objetos
            array_push($this->listBeer , $beer);//agrego el nuevo objeto en la list
            $this->SaveData(); // guardo en el archivo 

        }
        function remover($code){
            $this->RetrieveData();//trae del archivo carga lista de array en objetos
            $newArray = array();
            foreach($this->listBeer as $beer){
                 if($beer->getCode() != $code){
                 array_push($newArray , $beer);
                 }
            }

            $this->listBeer = $newArray;
            $this->SaveData(); // guardo en el archivo lo que hay en la lista de array clase

        }
       


    }




?>