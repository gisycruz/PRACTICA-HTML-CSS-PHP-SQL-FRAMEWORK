<?php
include_once "Config/Autoload.php";
require_once "validate-session.php";

?>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
     <span class="navbar-text">
          <strong>Template </strong> Base
     </span>
     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
               <a class="nav-link" href="list.php">Listar</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="add.php">Agregar</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="sing-session.php">Logout</a>
          </li>
     </ul>
</nav>
