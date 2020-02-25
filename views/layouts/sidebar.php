<?php 

session_name("loginUsuario");
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">
    <title>Transmisiones de Radio</title>
    <!-- vendor css -->
    <link rel="stylesheet" href="../../assets/css/Material_Icons.css">
    <link type="text/css" rel="stylesheet" href="../../assets/css/materialize.min.css" media="screen,projection">
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
    <!-- template css -->
    <link rel="stylesheet" href="../../assets/css/cassie.css">
  </head>
  <body>
  
  <!-- Sidebar -->
    <div class="sidebar">
      <div class="sidebar-header">
        <div>
          <br>
          <a href="#" class="sidebar-logo"><span>Transmisiones de Radio</span></a>
         
        </div>
      </div><!-- sidebar-header -->
      <div id="dpSidebarBody" class="sidebar-body">
        <ul class="nav nav-sidebar">
        <?php if(!isset($_SESSION['identity'])): ?>
        <?php else: ?>
          
          <li class="nav-label"><label class="content-label"><?=$_SESSION['identity']->nombre?></label></li>
        <?php endif; ?>

          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i data-feather="box"></i> Inicio</a>
            <ul class="nav nav-sub">
              <li class="nav-sub-item"><a href="index.php?controller=transradio&action=index" class="nav-sub-link active">Alta de Transmisiones</a></li>
              <li class="nav-sub-item"><a href="index.php?controller=transradio&action=lista" class="nav-sub-link">Lista de Transmisiones</a></li>
            </ul>
          </li>
          
        </ul>

        <hr class="mg-t-30 mg-b-25">

      </div><!-- sidebar-body -->
    </div><!-- sidebar -->

    <div class="content content-page">