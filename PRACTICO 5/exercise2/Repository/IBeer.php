<?php 
namespace Repository;

use Models\Beer as Beer;

interface IBeer{

   function add(Beer $beer);
   function remover($code);
   function getAll();
}

?>