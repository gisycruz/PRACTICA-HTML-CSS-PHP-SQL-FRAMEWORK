<?php
namespace process;
require_once "../Config/Autoload.php";


use Repository\RepositoryBeer as RepositoryBeer;
use Models\Beer as Beer;
if(isset($_POST)){

    $repositoryBeer = new RepositoryBeer();

    $beerNew = new Beer($_POST['code'],$_POST['name'],$_POST['description'],$_POST['type']);
    
    $repositoryBeer->add($beerNew);


    header("location:../list.php");

}

?>