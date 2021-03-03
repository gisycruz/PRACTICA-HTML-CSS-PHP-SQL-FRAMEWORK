<?php 
spl_autoload_register(function ($className)
{

    $fileName = dirname(__DIR__) ."/" . str_replace("\\", "/", $className)  . ".php";
    require_once($fileName);
});


?>