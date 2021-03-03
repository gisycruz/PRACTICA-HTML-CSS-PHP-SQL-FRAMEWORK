<?php
 require_once "header.php";
  ?>
     <main class="d-flex align-items-center justify-content-center height-100">
          <div class="content">
               <header class="text-center">
                    <h2>Login</h2>
               </header>
               <form action="Process/login.php" method="post" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="">User Name</label>
                         <input type="text" name="name" class="form-control form-control-lg" placeholder="Ingresar usuario" required>
                    </div>
                    <div class="form-group">
                         <label for="">Password</label>
                         <input type="password" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" required>
                    </div>
                    <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
               </form>
          </div>
     </main>

<?php
require_once "footer.php";
?>
