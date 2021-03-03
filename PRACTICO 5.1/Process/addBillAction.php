<?php 
namespace Process;
require_once "../Config/Autoload.php";
  use Config\Autoload as Autoload;
    
    
 use Model\Bill as Bill;
 use Model\Item as Item;
use Repository\RepositoryBill as RepositoryBill;
Autoload::Start();


if(isset($_POST)){

   // date("Y-m-j"); funcion devuelve fecha de ahora 
if((isset($_POST['date']))  && (isset($_POST['type'])) && (isset($_POST['number']))){
   if($_POST['date']  <= date("Y-m-j")){

    $billNew = new Bill();
    $billNew->setDate($_POST['date']);
    $billNew->setType($_POST['type']);
    $billNew->setNumber($_POST['number']);


    $repository = new RepositoryBill();
    $condition = $repository->beaschNumberBill($billNew->getNumber(),$billNew->getType());



    if($condition == NULL){
       
        $repository->addBill($billNew);
        
        session_start();
       
        $_SESSION['bill'] = $billNew->getType() ."-".  $billNew->getNumber();
       
          
        echo "<script> alert('La factura se genero correctamente, ingrese los detalles !');";  
        echo "window.location = '../bill-content.php'; </script>";
    }else{
      echo "<script> if(confirm('esta agregando una factura que ya existe'));";  
    echo "window.location = '../add-bill.php'; </script>";
    }

   }else{
    echo "<script> if(confirm('debe ingresar una fecha no futura'));";  
    echo "window.location = '../add-bill.php'; </script>";

   }


}
}

?>