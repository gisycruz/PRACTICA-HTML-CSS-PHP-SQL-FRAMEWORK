<?php 
require_once "validate-session.php";
require_once "model/Client.php";

use model\Client as Client ;

if(isset($_POST)){

$client = new Client();
$client->setUserName("Cosme Fulanito");
$client->setPassword("strongPassword!");

$message ="";

if($_POST['name'] == $client->getUserName()){
if($_POST['password'] == $client->getPassword()){
    session_start();
    $_SESSION['login'] = $client;
    header("location:add-bill.php");
}else{
     
    $message ="Incorrect Password ";
    require_once "index.php";
}
}else{
    $message = "Incorret User ";
    require_once "index.php";

}
}

?>