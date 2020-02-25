<?php 

session_name("loginUsuario");
session_start();
?>
<div class="header">
  <div class="header-left">
    <a href="" class="burger-menu"><i data-feather="menu"></i></a>
  </div><!-- header-left -->

  <div class="header-right">
  
    <div class="dropdown-menu-body">
      <a href="../../helpers/cerrarsesion.php" class="dropdown-item"><i data-feather="log-out"></i> Salir</a>
    </div>

  </div><!-- header-right -->
</div><!-- header -->