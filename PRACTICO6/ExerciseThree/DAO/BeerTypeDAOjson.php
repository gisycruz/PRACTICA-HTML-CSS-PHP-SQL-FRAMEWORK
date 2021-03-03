<?php 
namespace DAO;

use Models\BeerType as BeerType;
use DAO\IBeerType as IBeerType;

class BeertypeDAOjson implements IBeerType{

    private $listBeerType = array();
    private $fileName;
   

    public function __construct()
    {
        $this->fileName = ROOT ."Data/beerType.json";
    }

    private function GetNextId()
    {
        $id = 0;

        foreach($this->listBeerType as $beertype)
        {
            $id = ($beertype->getId() > $id) ? $beertype->getId() : $id;
        }

        return $id + 1;
    }

    public function addBeerType(BeerType $beertype){

        $this->RetrieveData();

        $beertype->setId($this->GetNextId());

        array_push($this->listBeerType,$beertype);

        $this->SaveData();

    }
    public function deleteBeerType($id){
        
        $this->RetrieveData();

         $newArray = array();

        foreach($this->listBeerType as $beerType){

            if($beerType->getId() != $id){

                array_push($newArray,$beerType);
           }
        }

        $this->listBeerType = $newArray;

        $this->SaveData();


    }
    public function getAllBeerType(){

        $this->RetrieveData();

        return $this->listBeerType;

    }
    function GetById($id)
    {
        $this->RetrieveData();

        $beerTypes = array_filter($this->listBeerType, function($beerType) use($id){
            return $beerType->getId() == $id;
        });

        $beerTypes = array_values($beerTypes); //Reorderding array

        return (count($beerTypes) > 0) ? $beerTypes[0] : null;
    }

    private function RetrieveData(){

        $this->listBeerType = array();

        if(file_exists($this->fileName))
        {
            $jsonContent = file_get_contents($this->fileName);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $beertype = new BeerType();
                $beertype->setId($valuesArray["id"]);
                $beertype->setName($valuesArray["name"]);
                $beertype->setDescription($valuesArray["description"]);
               

                array_push($this->listBeerType,$beertype);
            }
        }

    }
    private function SaveData(){

        $arrayToEncode = array();

        foreach($this->listBeerType as $beertype)
        {
            $valuesArray["id"] = $beertype->getId();
            $valuesArray["name"] = $beertype->getName();
            $valuesArray["description"] = $beertype->getDescription();
            

            array_push($arrayToEncode, $valuesArray);
        }

        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
        
        file_put_contents($this->fileName, $jsonContent);
    }


}



?>