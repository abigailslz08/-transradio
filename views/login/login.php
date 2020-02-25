<?php 
  require_once '../../conexion/conexion.php'; 

?>
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <title>Iniciar sesión</title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="../../assets/css/cassie.css">

  </head>
  <body>

    <div class="signin-panel">    
      <img src="../../assets/img/fondologin.jpg" width="2000px;" alt="" style="background-size:contain;">

      <div class="signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="../../index.php" class="sidebar-logo mg-b-40"><span>Transmisiones de Radio</span></a>
          <h4 class="signin-title">Bienvenido!</h4>
          <h5 class="signin-subtitle"></h5>
          
          
          <form action="../inicio/index.php?controller=usuario&action=login" method="POST">
            
              <div class="signin-form">
                <div class="form-group">
                  <label>Usuario</label>
                  <input id="usuario" type="text" name="usuario" class="form-control" placeholder="Ingresa tu usuario" value="">
                </div>

                <div class="form-group">
                  <label class="d-flex justify-content-between">
                    <span>Contraseña</span>
                    <!-- <a href="" class="tx-13">Olvidaste tu contraseña?</a> -->
                  </label>
                  <input type="password" name="pass" class="form-control" placeholder="Ingresa tu contraseña" value="">
                </div>

                <div class="form-group d-flex mg-b-0">
                  <button class="btn btn-brand-01 btn-uppercase flex-fill">Iniciar sesión</button>
                  <a href="registro.php" class="btn btn-white btn-uppercase flex-fill mg-l-10">Registrarse</a>
                </div>
              </div>
            </form>
  
        </div><!-- signin-sidebar-body -->
      </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/feather-icons/feather.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script>
      $(function(){

        'use strict'

        feather.replace();

        new PerfectScrollbar('.signin-sidebar', {
          suppressScrollX: true
        });

      })

      document.getElementById('usuario').focus();
    </script>
    <script src="../assets/js/svg-inline.js"></script>
  </body>
</html>
