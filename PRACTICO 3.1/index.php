<?php

echo "ejercicio 1.A combertir string en array <br>";
$name = 'juan,maria,pepe,andrea,jorgelina,cecilia';

$array = explode(",",$name);
var_dump($array);

echo "<br> ejercicio 1.B ardenados ascedentemente <br>";
sort($array);
var_dump($array);

echo "<br> ejercicio 1.C convierte primera letra de los enelmentos en mayuscula to arrayNew <br>";
$arrayNew =array();
foreach ($array as $toarray) {
  array_push($arrayNew,ucwords($toarray));
}
var_dump($arrayNew);

echo "<br> ejercicio 1.D y E combinacion de dos array para hacer uno asociativo <br>";

$cantNewArray = count($arrayNew);
$keys = array();

for ($i=0; $i < $cantNewArray ; $i++) { 
    array_push($keys,$i);
}
if (count($keys) == count($arrayNew)){
$arrayAssociative = array_combine($keys,$arrayNew);
}
var_dump($arrayAssociative);

echo "<br> ejercicio 2 existe en el array funcion  <br>";

function existeEnElArray($x ,$arrayAbuscar){
        if(in_array($x,$arrayAbuscar)){
            echo "existe";
        }
    }
existeEnElArray("Jorgelina",$arrayAssociative);

echo "<br> ejercicio 3 existe key <br>";

function existeKey($x,$arrayAbuscar){
    if(array_key_exists($x,$arrayAbuscar)){
        echo $arrayAbuscar[$x];
    }
}

existeKey(3,$arrayAssociative);

echo "<br> ejercicio 4 convertir array en string <br>";

function convierteArrayToStrig($array){
    $arrayNew = array_keys($array);
    $stringNew = implode(",",$arrayNew);
    echo $stringNew;
}

convierteArrayToStrig($arrayAssociative);
?> 