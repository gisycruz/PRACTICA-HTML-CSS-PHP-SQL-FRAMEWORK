<?php 
namespace DAO;

use Models\BeerType as BeerType;


interface IBeerType{

    function addBeerType(BeerType $beertype);
    function deleteBeerType($id);
    function getAllBeerType();
    function GetById($id);
}
    


?>