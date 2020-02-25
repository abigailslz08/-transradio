<?php
  $fecha=date("Y-m-d"); 
  $hora=date ("h:i:s");
  $nombreC = $_SESSION['identity']->nombre." ".$_SESSION['identity']->ap_paterno." ".$_SESSION['identity']->ap_materno;
?>
<section>
<div class="container">
  
  <div class="content-body">
    <div class="component-section no-code">
        <h2 id="section1" class="tx-semibold">Edición de Transmisiones - <?php echo $nombreC; ?></h2>
        <!-- <p class="mg-b-25">A basic form control with disabled and readonly mode.</p> -->
        <form action="../inicio/index.php?controller=transradio&action=editTrans&id=<?=$trans->id_transmision?>" method="POST">
          
          <div class="form-group">
          <div class="row">

            <div class="col-sm-12">
              <label for="" class="">Tema:</label>
              <input id="tema" type="text" class="form-control" name="tema" value="<?=$trans->tema?>" placeholder="Tema de la transmisión" required>
            </div>
          </div>
          </div>

          <div class="form-group">
          <div class="row">

            <div class="col-sm-4">
              <label for="" class="">Fecha:</label>
              <input type="date" class="form-control" name="fechaT" value="<?=$trans->fecha_trans?>" placeholder="" required>
            </div>

            <div class="col-sm-4">
              <label for="" class="">Hora:</label>
              <input type="time" class="form-control" name="horaT" value="<?=$trans->hora_trans?>" placeholder="" required>
            </div>

            <div class="col-sm-4">
              <label for="" class="">Punto de Montaje:</label>
              <input type="text" class="form-control" name="url" value="<?=$trans->url?>" placeholder="URL" required>
            </div>
          </div><!-- row -->
          </div>

          <button type="submit" class="btn btn-primary float-right">Guardar</button>

        </form>

      </div><!-- component-section -->
    </div>
    </div>
  </section>
  <script>
  document.getElementById('tema').focus();
  </script>