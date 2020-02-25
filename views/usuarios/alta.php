<!DOCTYPE html lang=es>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=gb18030">
      <!--Import Google Icon Font-->
      <link href="assets/css/Material_Icons.css" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Alta de Transmisiones</title>
    </head>

    <body>
      <div class="container">
        <header>
            <nav>
                <div class="nav-wrapper blue">
                  <a class="brand-logo">
                  Definir transmision de radio online (Febrero 2020)
                  </a>
                </div>
            </nav>
            <!-- <nav>
                <div class="nav-wrapper blue">
                  <div class="col s12">
                    <a href="index.php" class="breadcrumb">Inicio</a>
                    <a href="#!" class="breadcrumb">Definir radio</a>
                  </div>
                </div>
            </nav> -->
        </header>
        <div class="row" style="margin-top:30px">
            <nav>
                <div class="nav-wrapper">
                  <a class="brand-logo">
                    Leonardo David Barriguete Canela                  </a>
                </div>
            </nav>
            <form action="guarda.php" method="post" class="col s12" style="margin-top:30px">
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="De que vas a hablar" value="Auditoria de sitios web (Transmitido con éxito)." id="tema" name="tema" type="text" class="validate">
                  <label for="tema">Tema</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6">
                  <input placeholder="Ej. 10/08/2018" id="fecha" value="02/03/2019" name="fecha" type="text" class="validate">
                  <label for="fecha">Fecha</label>
                </div>
                <div class="input-field col s12 m6">
                  <input placeholder="Ej. 22:00" id="hora" name="hora" value="11:00" type="text" class="validate">
                  <label for="hora">Hora</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Url de la radio (probar primero)" id="url" name="url" value="987987" type="text" class="validate">
                  <label for="url">Punto de montaje</label>
                </div>
              </div>
              <input type="hidden" name="id" value="1" />
              <input type="hidden" name="nombre" value="Leonardo David Barriguete Canela"/>
              <button class="btn waves-effect waves-light blue " type="submit" name="action">Guardar
                <i class="material-icons right">send</i>
              </button>
            </form>
        </div>  
    </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="plugins/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="plugins/materialize.min.js"></script>
    </body>
  </html>