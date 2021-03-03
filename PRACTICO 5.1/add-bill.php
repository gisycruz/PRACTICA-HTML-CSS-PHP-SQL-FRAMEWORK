<?php
require_once "header.php";
require_once "nav.php";

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h3 class="mb-3">Datos del Usuario</h3>

               <div class="bg-light-alpha p-2">
                    <div class="row">
                         <div class="col-lg-4">
                              <label for="">Nombre</label>
                              <input type="text" name="" class="form-control form-control-ml" disabled value="<?php echo  $nameUser->getFirstName(); ?>">
                         </div>

                         <div class="col-lg-3">
                              <label for="">Apellido</label>
                              <input type="text" name="" class="form-control form-control-ml" disabled value="<?php echo  $nameUser->getLastName(); ?>">
                         </div>

                         <div class="col-lg-2">
                              <label for="">DNI</label>
                              <input type="number" name="" class="form-control form-control-ml" disabled value="<?php echo  $nameUser->getDni(); ?>">
                         </div>

                         <div class="col-lg-3">
                              <label for="">Email</label>
                              <input type="text" name="" class="form-control form-control-ml" disabled value="<?php echo  $nameUser->getEmail(); ?>">
                         </div>
                    </div>
          </div><br>
          <div class="container">
               <h2 class="mb-4">Agregar Factura</h2>

               <form action ="Process/addBillAction.php" method="post"  class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="date">Fecha</label>
                                   <input type="date" name="date"  class="form-control" required>
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <p>Tipo</p>
                                   <input type="radio" name="type" value="A" class="radioSize" required>Factura A
                                   <input type="radio" name="type" value="B" class="radioSize" required>Factura B
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="number">Numero</label>
                                   <input type="number" name="number"  class="form-control" min="0" required>
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php require_once 'footer.php'; ?>
