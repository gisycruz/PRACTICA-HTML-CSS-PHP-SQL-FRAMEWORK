<?php 
require_once "validate-session.php";

if($_GET){

    $time = time();
	$fecha = date("Y-m-d", $time);//ahora
    $message = "";
    if($_GET['date'] > $fecha){
        $message = "Debe ingresar una fecha no futura";
        require_once "add-bill.php";
    }else{
       header("location:bill-content.php");
    }
   
}


?>