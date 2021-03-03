<?php
namespace Process;

require_once "../Config/Autoload.php";

use Models\Beer as Beer;
use Repository\RepositoryBeer as RepositoryBeer;

if($_POST){

    $code = $_POST['remover'];

    $repository = new RepositoryBeer();
    $repository->remover($code);

    header("location:../list.php");
}

?>