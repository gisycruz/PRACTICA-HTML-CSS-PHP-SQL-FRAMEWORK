<?php 

namespace Controllers;

use DAO\BeerDAOjson as BeerDAOjson;
use Models\Beer as Beer;
use DAO\BeerTypeDAOjson as BeerTypeDAOjson;
use Models\BeerType as BeerType;

class BeerController
{
    private $beerDAOjson ;
    private $beerTypeDAOjson;


    public function __construct()
    {
        $this->beerDAOjson = new BeerDAOjson();
        $this->beerTypeDAOjson = new BeerTypeDAOjson();
    }


    public function ShowViewsAddBeer($message =""){

        $arrayBeerType = $this->beerTypeDAOjson->getAllBeerType();

        require_once(VIEWS_PATH ."add-beer.php");
    }

    public function ShowViewsListBeer($message =""){

        $beerList = $this->beerDAOjson->getAllBeer();
        $beerTypeList = $this->beerTypeDAOjson->getAllBeerType();

        //For each beer for which we only have the beerTypeId, we get the complete beerType object and we assign it to it
        foreach($beerList as $beer)
        {
            $beerTypeId = $beer->getBeerType()->getId();
            $beerTypes = array_filter($beerTypeList, function($beerType) use($beerTypeId){                    
                return $beerType->getId() == $beerTypeId;
            });

            $beerTypes = array_values($beerTypes); //Reordering array

            $beerType = (count($beerTypes) > 0) ? $beerTypes[0] : new BeerType(); //If beerType does not exist, we create an empty object to avid null reference

            $beer->setBeerType($beerType);
        }
        
        require_once(VIEWS_PATH."beer-list.php");
    }

    public function add($code,$name,$idBeertype,$description,$density,$price){

        $beerType = new BeerType();
        $beerType->setId($idBeertype);

        $beerNew = new Beer();
        $beerNew->setCode($code);
        $beerNew->setName($name);
        $beerNew->setDescription($description);
        $beerNew->setBeerType($beerType);
        $beerNew->setDensity($density);
        $beerNew->setPrice($price);

        $this->beerDAOjson->addBeer($beerNew);

        $message = "A new beer was successfully added!!";

        $this->ShowViewsAddBeer($message);

    }

        public function delete($code){

           $this->beerDAOjson->deleteBeer($code);
           $message ="A beer was successfully removed";
           $this->ShowViewsListBeer($message);

        }
    


}

?>