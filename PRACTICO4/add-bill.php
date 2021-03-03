<?php 
require_once "validate-session.php";
require_once "header.php";
 require_once "nav.php"
 ?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Agregar Factura</h2>

               <form action="action-add.php" method ="get" class="bg-light-alpha p-5">
               <p><?php if(isset($message)){ echo $message; }?></p>
               <br>
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Fecha</label>
                                   <input type="date" name="date" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <p>Tipo</p>
                                   <input type="radio" name="type" value ="billa"class="radioSize">Factura A
                                   <input type="radio" name="type" value ="billb" class="radioSize">Factura B
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Numero</label>
                                   <input type="number" name="number" class="form-control" min="0" required>
                              </div>
                         </div>
                    </div>
                    <button type="submit" name="button" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>
<?php require_once "footer.php"; ?>