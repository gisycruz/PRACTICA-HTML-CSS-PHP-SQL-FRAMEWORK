<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('Config\Autoload.php');

Config\Autoload::Start();

 include_once "header.php";
  ?>

     <main class="d-flex align-items-center justify-content-center height-100">
          <div class="content">
               <header class="text-center">
                    <h2>Practico N° 5.1</h2>
               </header>
               <form action="Process/LoginClient.php" method="post" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="">Usuario</label>
                         <input type="text" name="name" class="form-control form-control-lg" placeholder="Ingresar usuario" requierd>
                    </div>
                    <div class="form-group">
                         <label for="">Contraseña</label>
                         <input type="password" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña" requierd>
                    </div>
                    <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
               </form>
          </div>
     </main>

<?php
 require_once "footer.php";
?>
