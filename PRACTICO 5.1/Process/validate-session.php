<?php
namespace Process;
use Config\Autoload as Autoload;
use Model\Client as Client;

Autoload::Start();
session_start();

if(!isset($_SESSION['login'])){
  header("location:index.php"); 
}else{

  $nameUser = $_SESSION['login'];
}

?>