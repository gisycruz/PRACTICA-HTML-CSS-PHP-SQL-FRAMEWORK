<?php 
namespace Process;

use Config\Autoload as Autoload;
Autoload::Start();


use Model\Bill as Bill;
use Model\Item as Item;
use Repository\RepositoryBill as RepositoryBill;



if(isset($_SESSION['bill'])){

    $bill = explode('-', $_SESSION['bill']);

    $type = $bill[0];
    $number = $bill[1];

    $repository = New RepositoryBill();
    $billNew = $repository->beaschNumberBill($number,$type);

    

    if(!isset($billNew)){
        echo "<script> alert('Hubo inconveniente al procesar la Factura, vuelva a intentarlo!'));";  
        echo "window.location = '../add-bill.php'; </script>";

    }
    if(isset($_POST)){
    if(isset($_POST["name"]) && isset($_POST["price"]) && isset($_POST["quantity"]) ){


        $name = $_POST['name'];
        $description = isset($_POST["description"]) ? $_POST["description"] : "";
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];


           $itemNEW = new Item();
    
            $itemNEW->setName($name);
            $itemNEW->setDescription($description);
            $itemNEW->setPrice($price);
            $itemNEW->setQuantity($quantity);
    
          

            $billNew = $repository->addItem($billNew,$itemNEW);
            
    }

}
}
?>