<?php 
namespace Process;
include_once "../Config/Autoload.php";
use Config\Autoload as Autoload;
use Model\Bill as Bill;
use Model\Item as Item;
use Repository\RepositoryBill as RepositoryBill;
Autoload::Start();
if($_POST){
    if(isset($_POST['remover'])){

        $dateAndNumber = $_POST['remover'];

        $arrayDateAndNumber = explode(",",$dateAndNumber);

       $type = $arrayDateAndNumber[0];
       $number =$arrayDateAndNumber[1];

       
       $repository  = new RepositoryBill();

       $repository->deleteBill($number,$type);

       echo "<script> alert('Se ha eliminado correctamente la Factura seleccionada!');";  
       echo "window.location = '../bill-list.php'; </script>";

    }
}

?>