<?php 
namespace process;


if(isset($_POST)){
  
    if($_POST['do'] == "continuar"){

        header("location:../add.php");
    }else{

        header("location:../sing-session.php");
    }



}



?>