<?php
namespace Controllers;

use Models\BeerType as BeerType;
use DAO\BeerTypeDAOjson as BeerTypeDAOjson;

class BeerTypeController{

    private $beerTypeDAOjson;
    
    public function __construct()
    {
        $this->beerTypeDAOjson = new BeerTypeDAOjson();
    }

    public function ShowViewsAddBeerType($message =""){

        require_once(VIEWS_PATH."add-beertype.php");
    }

    public function ShowViewsListBeerType($message =""){

        $arrayBeerType = $this->beerTypeDAOjson->getAllBeerType();

        require_once(VIEWS_PATH."beertype-list.php");
    } 

    public function add($name ,$description){

        $description = isset($description) ? $description : ""; 

        $beerType = new BeerType();
        $beerType->setName($name);
        $beerType->setDescription($description);

        $this->beerTypeDAOjson->addBeerType($beerType);

        $message = "A new type beer was successfully added!!";

        $this->ShowViewsAddBeerType($message);
    }

    
    public function delete($id)
   {
      $this->beerTypeDAOjson->deleteBeerType($id);

      $message = "A type beer was successfully removed";

      $this->ShowViewsListBeerType($message);
   }



}


?>