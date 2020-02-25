<?php
require_once 'conexion/conexion.php';
require_once 'models/inicio.php';

$trans = new Transmision();
$transmisiones = $trans->getAllT();


?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

<title>Transmisiones de Radio</title>

<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.vegas.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<link rel="stylesheet" href="assets/css/main.css">

<script async  src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script defer  src="assets/js/jquery.js"></script>
<script defer  src="assets/js/ajaxify.min.js"></script>
</head>
<body>


<!--=================================
	Header
	=================================-->
<header>
  <nav class="navbar yamm navbar-default">
    <div class="container">
      <div class="navbar-header">
        </a>
      </div>
      <div class="nav_wrapper">
        <div class="nav_scroll">
          
          <ul class="nav navbar-nav">
            <li class="active dropdown"><a href="#" onclick="cambiarlogin();">Iniciar Sesión </a>
            </li>
            <li class="yamm-fw dropdown"><a href="#" onclick="cambiarregistro();">Registrarse </a>
    
          </ul>
        </div>
        <!--/.nav-collapse --> 
        
      </div>
    </div>
  </nav>
</header>

<!--=================================
Vegas Slider Images
=================================-->

<ul class="vegas-slides hidden">
  <li><img data-fade='2000' src="assets/img/BG/bg1.jpg" alt="" /></li>
  <li><img data-fade='2000' src="assets/img/BG/bg2.jpg" alt="" /></li>
  <li><img data-fade='2000' src="assets/img/BG/bg3.jpg" alt="" /></li>
  <li><img data-fade='2000' src="assets/img/BG/bg4.jpg" alt="" /></li>
</ul>


<div id="ajaxArea">
    <div class="pageContentArea">
      <!--=================================
      bread crums
      =================================-->
        <section class="breadcrumb">
              
             <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <h1>Transmisiones de Radio</h1>
                          <h5>Lista de Transmisiones</h5>
                      </div>
                  </div>
             </div>
        </section>
      <div class="clearfix"></div>
      
      
      <!--=================================
      Latest Events
      =================================-->
      
      <section id="latest-events">
          <div class="container">
              <div class="row">
                    <?php 
                      while ($tran = $transmisiones->fetch_object())
                      {
                        $objFecha = new DateTime($tran->fecha_trans, new DateTimeZone('America/Mexico_City'));
                        $mes= $objFecha->format('m');
                        $dia= $objFecha->format('d');
                     ?>
                      <div class="col-lg-4 col-md-4 col-sm-6">
                          <div class="event-feed latest">
                              
                              <div class="date">
                                  <span class="day"><?php echo $dia; ?></span>
                                  <span class="month"><?php echo $mes; ?></span>
                              </div>
                              <h5><a href="#" ><?php echo $tran->tema; ?></a></h5>
                              <ul>
                                  <li><b class=" fa fa-location-arrow"></b><?php echo $tran->nombre_trans; ?></li>
                                  <li><b class=" fa fa-clock-o"></b><?php echo $tran->hora_trans; ?></li>
                                  
                              </ul>
                              <a class="btn" href="<?php echo $tran->url; ?>">Escuchar</a>
                          </div><!--\\event-feed latest-->
                      </div>

                      <?php 
                        }
                       ?>

              </div><!--row-->

              
        </div><!--row-->
          </div><!--//container-->  
      </section>
      <div class="clearfix"></div>

	</div><!--pageContent-->
</div><!--ajaxwrap-->    

<footer>
  <div class="container">
  </div>
  <!--\\container--> 
</footer>

<!--=================================
Script Source
=================================--> 

<script defer  src="assets/js/bootstrap.min.js"></script>
<script defer  src="assets/js/jquery.easing-1.3.pack.js"></script>
<script defer  src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script> 
<script defer  src="assets/js/jquery.mousewheel.min.js"></script> 
<script defer  src="assets/js/jflickrfeed.min.js"></script> 
<script defer  src="assets/js/jquery.flexslider-min.js"></script> 
<script defer  src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script> 
<script defer  src="assets/js/tweetie.min.js"></script> 
<script defer  src="assets/js/jquery.prettyPhoto.js"></script> 
<script defer  src="assets/jPlayer/jquery.jplayer.min.js"></script> 
<script defer  src="assets/jPlayer/add-on/jplayer.playlist.min.js"></script> 
<script defer  src="assets/js/jquery.vegas.min.js"></script> 
<script defer  src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> 
<script defer  src="assets/js/jquery.calendar-widget.js"></script> 
<script defer  src="assets/js/isotope.js"></script>
<script defer  src="assets/js/main.js"></script>   

<script>/*Place Your Google Analytics code here*/</script>
<script>

  function cambiarlogin(){

    window.location= "views/login/login.php";

  }
  function cambiarregistro(){

window.location= "views/login/registro.php";

}
</script>

</body>
</html>
