
<?php 
include_once('header.php');
include_once('nav-bar.php');
?>

<div id="breadcrumb" class="hoc clear"> 
    <h6 class="heading">Listado de Tipos de Cervezas</h6>
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <div class="content"> 
      <div class="scrollable">
      <form action="<?php echo FRONT_ROOT."BeerType/delete"?>" method="GET">
      <p><?php if(isset($message)){ echo $message; }?></p>
        <table style="text-align:center;">
          <thead>
            <tr>
              <th style="width: 150px;">Nombre</th>
              <th style="width: 450px;">Descripción</th>
              <th style="width: 100px;">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <?php if(isset($arrayBeerType)){
              foreach($arrayBeerType as $beerType){?>
                <td><?php echo $beerType->getName(); ?></td>
                <td><?php echo $beerType->getDescription(); ?></td>
                <td><button type="submit" class="btn" href="" name ="id" value="<?php echo $beerType->getId(); ?>">Eliminar</button></td>
            </tr>
            <?php }
            }
            ?>
          </tbody>
        </table>
      </form> 
      </div>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php 
include_once('footer.php');
?>
  