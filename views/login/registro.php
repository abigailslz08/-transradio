<?php
	session_start();
	require_once '../../helpers/autoload.php';
	require_once '../../conexion/conexion.php';
	require_once '../../config/parametros.php';
?>


<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <title>Registro de usuarios</title>

    <!-- vendor css -->
    <link href="../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="../../assets/css/cassie.css">

  </head>
  <body>

    <div class="signup-panel">
    <img src="../../assets/img/fondoregistro.jpg" width="2000px;" alt="" style="background-size:contain;">

      <div class="signup-sidebar">
        <div class="signup-sidebar-body">
          <a href="../../index.php" class="sidebar-logo mg-b-40"><span>Transmisiones de Radio</span></a>
          <h4 class="signup-title">Crea una cuenta nueva!</h4>
          <h5 class="signup-subtitle">Solo toma unos minutos.</h5>
        
        <form action="registro.php?controller=usuario&action=saveUsuario" method="POST">
          
            <div class="signup-form">
              <div class="row">

                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Nombre</label>
                    <input id="nom" type="text" class="form-control" name="nombre" placeholder="Escribe el nombre" value="" required>
                  </div>
                </div><!-- col -->

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Apellido Paterno</label>
                    <input type="text" class="form-control" name="paterno" placeholder="Escribe el apellido paterno" value="" required>
                  </div>
                </div><!-- col -->

                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Apellido Materno</label>
                    <input type="text" class="form-control" name="materno" placeholder="Escribe el apellido materno" value="" required>
                  </div>
                </div><!-- col -->

              </div><!-- row -->

              <div class="row mg-b-5">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario" value="" required>
                  </div>
                </div><!-- col -->
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Escribe tu contraseña" value="" required>
                  </div>
                </div><!-- col -->
                <div class="col-sm-12">
                  <div class="form-group">
                    <label> 
                  <?php
                      if(isset($_GET['controller'])){
                        $nombre_controlador = $_GET['controller'].'Controller';
                      }else{
                        echo '<button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">Registrarse</button>';                        
                        echo '<a href="login.php" class="btn btn-white btn-uppercase flex-fill mg-l-10">Iniciar sesión</a>';
                        exit();
                      }

                      if (class_exists($nombre_controlador)) {
                        $controlador = new $nombre_controlador();

                        if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
                          $action = $_GET['action'];
                          $controlador->$action();

                          if ($controlador=="Usuario registrado, Inicie sesión") {
                            echo '<br><br><div class="form-group d-flex mg-b-0"> ';                           
                            echo ' <a href="login.php" class="btn btn-white btn-uppercase flex-fill mg-l-10">Ya tengo una cuenta</a>';
                            echo '</div>';
                          }else{
                            echo '<br><br><div class="form-group d-flex mg-b-0">';                            
                            echo '<button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">Registrarse</button>';
                            echo '<a href="login.php" class="btn btn-white btn-uppercase flex-fill mg-l-10">Iniciar sesión</a>';
                            echo '</div>';
                          }                      

                        }else{
                          echo '<button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">Registrarse</button>';
                        }
                      }else{
                        echo '<button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">Registrarse</button>';
                      }
                  ?>
                  </label>
                  </div>
                </div><!-- col -->
              </div><!-- row -->

               

          </div>
          
        </form>
          <!-- <p class="mg-t-auto mg-b-0 tx-color-03">Ya tienes una cuenta? <a href="login.php">Signin</a></p> -->
        </div><!-- signup-sidebar-body -->
      </div><!-- signup-sidebar -->
    </div><!-- signup-panel -->

    

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/feather-icons/feather.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script>
      $(function(){

        'use strict'

        feather.replace();

        new PerfectScrollbar('.signup-sidebar', {
          suppressScrollX: true
        });

      })



        document.getElementById('nom').focus();

    
    </script>
  </body>
</html>
