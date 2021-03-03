<?php 
namespace DAO;

use Models\Beer as Beer;
use DAO\IBeer as IBeer;
use Models\BeerType as BeerType;

class  BeerDAOjson  implements IBeer
{
    private $listBeer = array();
    private $fileName ;

    public function __construct()
    {
        $this->fileName = ROOT ."Data/beer.json";
    }
    private function GetNextId()
    {
        $id = 0;

        foreach($this->listBeer as $beer)
        {
            $id = ($beer->getId() > $id) ? $beer->getId() : $id;
        }

        return $id + 1;
    }


    public function addBeer(Beer $beer){

       $this->RetrieveData();

       $beer->setId($this->GetNextId());

       array_push($this->listBeer,$beer);

       $this->SaveData();

    }
    public function getAllBeer(){

        $this->RetrieveData();

        return $this->listBeer;
    }
    public function deleteBeer($code){

        $this->RetrieveData();
        $newArray = array();
        foreach($this->listBeer as $beer){
            if($beer->getCode() != $code){
                array_push($newArray , $beer);
            }
        }

        $this->listBeer = $newArray;

        $this->SaveData();


    }
    private function SaveData(){

        $arrayToEncode = array();

        foreach($this->listBeer as $beer)
        {
            $valuesArray["id"] = $beer->getId();
            $valuesArray["code"] = $beer->getCode();
            $valuesArray["name"] = $beer->getName();
            $valuesArray["description"] = $beer->getDescription();
            $valuesArray["density"] = $beer->getDensity();
            $valuesArray["idBeerType"] = $beer->getBeerType()->getId();
            $valuesArray["price"] = $beer->getPrice();
           

            array_push($arrayToEncode, $valuesArray);
        }

        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
        
        file_put_contents($this->fileName, $jsonContent);

    }

    private function RetrieveData(){

        $this->listBeer = array();

        if(file_exists($this->fileName))
        {
            $jsonContent = file_get_contents($this->fileName);

            $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

            foreach($arrayToDecode as $valuesArray)
            {
                $beerType = new BeerType();                     
                $beerType->setId($valuesArray["idBeerType"]);
                $beer = new Beer();
                $beer->setId($valuesArray["id"]);
                $beer->setCode($valuesArray["code"]);
                $beer->setName($valuesArray["name"]);
                $beer->setDescription($valuesArray["description"]);
                $beer->setDensity($valuesArray["density"]);
                $beer->setBeerType($beerType);
                $beer->setPrice($valuesArray["price"]);

                array_push($this->listBeer,$beer);
            }
        }

    }


}


?>