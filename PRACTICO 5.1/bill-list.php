<?php
require_once "header.php";
require_once "nav.php";
require_once "Config/Autoload.php";
use Config\Autoload as Autoload;

use Repository\RepositoryBill as RepositoryBill;
use Model\Bill as Bill;
use Model\Item as Item;
Autoload::Start();

$repository = new RepositoryBill();

$arrayBill = $repository->getAll();

?>
<main class="py-5">
     
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Listado de Facturas</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Fecha</th>
                         <th>Tipo</th>
                         <th>Numero</th>
                         <th>Importe</th>
                         <th>Eliminar</th>
                    </thead>
                    <tbody>
                    <form action ="Process/remover.php" method ="post" >
                         <?php 
                          $totolAllBill =0.0;
                         
                         if(isset($arrayBill)) {
                              foreach($arrayBill as $bill){?>
                              <tr>
                              <td><?php echo $bill->getDate();?></td>
                              <td><?php echo $bill->getType();?></td>
                              <td><?php echo $bill->getNumber();?></td>
                              <td><?php echo $bill->TotalBill();?></td>
                              <td>
                              <button type="submit" name="remover" class="btn btn-danger" value="<?php echo $bill->getType().','.$bill->getNumber(); ?>"> Eliminar </button>
                              </td>  
                              </tr>
                         <?php 
                          $totolAllBill = $totolAllBill + $bill->TotalBill();
                    }
                         }?>
                         </form>
                    </tbody>
               </table>
          </div>
     </section>

     <div class="container">
          <div class="bg-light-alpha p-1">
               <div class="row">
                    <div class="col-lg-3">
                         <div class="form-group text-white">
                              <label for="" class="ml-1"><b>IMPORTE TOTAL FACTURADO</b></label>
                              <input type="text" value="<?php echo $totolAllBill;?>" class="form-control ml-1 text-strong" disabled>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</main>

<?php include('footer.php') ?>
