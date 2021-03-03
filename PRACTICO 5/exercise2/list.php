<?php
require_once "nav.php";
require_once "header.php";


use Repository\RepositoryBeer as RepositoryBeer;
use Models\Beer as Beer;
$ReposityBeer = new RepositoryBeer();

$arrayBeer = $ReposityBeer->getAll();

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">List Beer</h2>
               <table class="table bg-light-alpha">
                    <thead>
                         <th>Code</th>
                         <th>Name</th>
                         <th>Description</th>
                         <th>type</th>
                         <th>Delete</th>
                    </thead>
                    <tbody>  
                   <form action="Process/deleteBeer.php" method ="post">  
                  <?php if(isset($arrayBeer)){
                         foreach($arrayBeer as $beer){ ?>
                           <tr>
                              <td><?php echo $beer->getCode();?></td>
                              <td><?php echo $beer->getName();?></td>
                              <td><?php echo $beer->getDescription();?></td>
                              <td><?php echo $beer->getType();?></td>
                              <td> 
                             <button type="submit" name="remover" class="btn btn-danger" value="<?php echo $beer->getCode(); ?>"> Eliminar </button>
                             </td>
                              </tr>
                             <?php }
                          }?>
                          </form>    
                    </tbody>
               </table>
          </div>
     </section>

</main>
<?php require_once "footer.php" ?>
