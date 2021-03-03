<?php
include_once "nav.php";
include_once "header.php";

?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Add Beer</h2>

               <form action="Process/addBeerAction.php" method="post" class="bg-light-alpha p-5">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="code">Code</label>
                                   <input type="Text" name="code" value="" class="form-control" required>
                                   <label for="name">Name</label>
                                   <input type="Text" name="name" value="" class="form-control" required>
                                   <label for="description">Description</label>
                                   <input type="Text" name="description" value="" class="form-control" required>
                                   <label for="type">Type</label>
                                   <input type="Text" name="type" value="" class="form-control" required>
                              </div>
                         </div>
                         
                    </div>
                    <button type="submit"  class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>

<?php include_once "footer.php"; ?>
