<?php 
namespace DAO;

use Models\Beer as Beer;

interface IBeer{

    function addBeer(Beer $beer);
    function getAllBeer();
    function deleteBeer($code);
    
    
}

?>