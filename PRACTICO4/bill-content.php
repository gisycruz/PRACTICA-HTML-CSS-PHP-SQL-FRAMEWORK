<?php 
require_once "validate-session.php";
require_once "header.php";
require_once "nav.php";
require_once "model/Item.php";
use model\Item as Item;
$array = "pincel fino de 2/3, pincel de cerdas finas para acuarela, 120.00, 6,
pintura fluor 1L, pintura warner fluo, 400, 3,
plato de mezcla, plato plástico de mezcla con refuerzo anti caída, 200.00, 1,
pincel común 1.2, pincel fabber cerda común para tempera, 120, 5,
rodillo grueso 3/4, rodillo rugoso de expesor para exterior, 95, 2,
kit de acuarelas, combo de acuarelas color pastel, 770, 2";

$arrayNew = explode(",",$array);
$arrayItem = array();
while(!empty($arrayNew)){
     $item = new Item();
     $item->setName(array_shift($arrayNew));
     $item->setDiscription(array_shift($arrayNew));
     $item->setPrice(array_shift($arrayNew));
     $item->setQuantity(array_shift($arrayNew));
      
     array_push($arrayItem,$item);

}

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Detalles de Factura</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Nombre</th>
                         <th>Descripcion</th>
                         <th>Precio</th>
                         <th>Cantidad</th>
                         <th>Sub-total</th>
                    </thead>
                    <tbody>
                         <tr>
                         <?php $total = 0; ?>
                         <?php foreach($arrayItem as $item){?>
                              <td><?php echo $item->getName(); ?></td>
                              <td><?php echo $item->getDiscription(); ?></td>
                              <td><?php echo $item->getPrice(); ?></td>
                              <td><?php echo $item->getQuantity(); ?></td>
                             <?php $subtotal = $item->getPrice() * $item->getQuantity();?>
                              <td><?php if(isset($_GET['button'])){echo $subtotal ;}?></td>
                              <?php $total = $total + $subtotal;?>
                         </tr>
                         <?php 
                         }
                         ?>
                         
                    </tbody>
               </table>
          </div>
     </section>

     <section id="eliminar">
          <div class="container">
               
               <form action="bill-content.php" method="get" class="form-inline bg-light-alpha p-3">
                    <div class="form-group text-white">
                         <label for="">TOTAL</label>
                         <input type="text"  value="<?php if(isset($_GET['button'])){ echo $total;}?>" class="form-control ml-3" disabled>
                    </div>
                    <button type="submit" name="button" class="btn btn-danger ml-3">Calcular Total</button>
               </form>
          </div>
     </section>

</main>
<?php require_once "footer.php"; ?>
