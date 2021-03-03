<?php 
spl_autoload_register(function ($className)
{
   /* /*•__DIR__ es una constante de sistema que devuelve el directorio 
done se encuentra el archivo que invoca la función
•dirname() devuelve la ruta de un archivo o directorio dado*/
    $fileName = dirname(__DIR__) ."/" . str_replace("\\", "/", $className)  . ".php";
     echo  "<br>" . $fileName;
    require_once($fileName);
});

?>