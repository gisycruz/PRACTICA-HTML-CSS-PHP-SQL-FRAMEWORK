<?php 
namespace Process;

require_once "../Config/Autoload.php";
use Config\Autoload as Autoload;

Autoload::Start();

use Repository\RepositoryClient as RepositoryClient;
use Model\Client as client;

if(isset($_POST)){

    $repository = new RepositoryClient();

    $client = $repository->searchUserName($_POST['name']);

    if($client != NULL){
      if($client->getPassword() == $_POST['password']){

        session_start();

        $_SESSION['login'] = $client;

        
        header("location:../add-bill.php");
        
      }else{
        echo "<script> if(confirm('Incorrect password !'));";  
        echo "window.location = '../index.php'; </script>";

      }

    }else{

        echo "<script> if(confirm('Incorrect  data!'));";  
        echo "window.location = '../index.php'; </script>";

    }
        
       
    

}


?>