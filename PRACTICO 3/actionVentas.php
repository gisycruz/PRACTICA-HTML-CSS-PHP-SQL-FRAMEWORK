<?php 
if($_POST){

    $cantidadDeProducto = $_POST['cantpro'];

    $mascota = 100;
    $ropa =150;

    $valorTicket =0;

    if(isset($_POST['producto'])){
    if ($_POST['producto'] == 'mascota'){
         $valorTicket = $mascota * $cantidadDeProducto;
        }elseif($_POST['producto'] == 'ropa'){
            $valorTicket = $ropa * $cantidadDeProducto;
        }
    }else{
            echo "no a elegido una opcion <br>";
        }

    echo "usted a gastado :" .$valorTicket ."<br>";

    echo "ejercico 7.a <br>";
    
   function mensajeDeEnvio($producto , $precioTotal){
       if($precioTotal < 200){
             if($producto =='mascota'){
               echo "no se puede realizar el envio ,su ticket no supera los $200 <br>";
                }elseif($producto == 'ropa')
               echo "los gastos de envio son de $80 ";

       }elseif($precioTotal > 200 && $precioTotal < 600){
        echo "los gastos de envio son de $80 ";
       }else{
        echo "el envio es Gratis  <br>";
       }
       if($precioTotal >= 2000){
           echo "codigo de descuento : qwwpebkb123 <br>";
       }
   }

   if(isset($_POST['producto'])){
       echo "mensaje de envio : <br>";
       echo  mensajeDeEnvio($_POST['producto'],$valorTicket)  ;
   }else{
       echo "no tiene envio <br>";
   }
}
