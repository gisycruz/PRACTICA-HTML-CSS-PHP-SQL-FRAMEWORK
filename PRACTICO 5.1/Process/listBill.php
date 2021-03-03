<?php 
namespace Process;

if(isset($_POST)){
    if(isset($_POST['button'])){

        echo "<script> alert('La factura se guardo correctamente, detalles de sus facturas:');";  
        echo "window.location = '../bill-list.php'; </script>";
    }
}

?>