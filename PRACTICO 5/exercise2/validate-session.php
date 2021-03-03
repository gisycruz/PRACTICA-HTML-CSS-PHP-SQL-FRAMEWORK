<?php 
session_start();
if(!isset($_SESSION['loggin'])){
    header("location:index.php");
}

?>