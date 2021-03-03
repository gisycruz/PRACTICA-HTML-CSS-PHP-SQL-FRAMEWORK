<?php
require_once "Config/Autoload.php";
require_once "Process/validate-session.php"?>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          Hola <strong><?php echo  $nameUser->getUserName();?></strong> - TP N° 5.1
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="bill-list.php">Listar Facturas</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="add-bill.php">Agregar Nueva Factura</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="Process/sing-session.php">Cerrar sesión</a>
          </li>
     </ul>
</nav>
