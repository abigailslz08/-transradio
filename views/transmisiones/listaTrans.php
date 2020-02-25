<section>
  <div class="container">

<form name="formL" method="POST">
 	<div class="row">
            <div class="col-xs-12">

              <div class="box box-<?php echo "$sColorCaja";  ?>">
                <div class="box-header">
                <br>
                  <h3 class="box-title">Lista de Transmisiones</h3>
                <br>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                  <table id="exampleA" class="table table-condensed table-bordered table-striped ">
                    <thead>
                      <tr class="info">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Tema</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>URL</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                  
                  //Descargamos el arreglo que arroja la consulta
                  $n=1;
                  while ($tran = $transmisiones->fetch_object())
                  {

                  	// $like=($row[3]=='si')?"<i class='fa fa-thumbs-o-up' aria-hidden='true'></i>":"<i class='fa fa-thumbs-o-down' aria-hidden='true'></i>"; 
                  	$activo=($status==1)?"<i class='fa fa-check-square-o' aria-hidden='true'></i>":"<i class='fa fa-square-o' aria-hidden='true'></i>"; 
                    $stu=($status==1)?"activo":"inactivo";

                  	$habilitar=($tran->id_usuario==$_SESSION['identity']->id_usuario)?"":"disabled";

                  	$valor=($status==1)?0:1;
                  	$checado=($status==0)?'':'checked';
                  ?> 
                       <tr>
            						<td id="<?php echo "txtNum-".$row[0]; ?>" class="<?php echo "colorT-".$row[0]; ?> <?php echo $stu; ?>"><?php echo $n; ?></td>
            						
                        <td id="<?php echo "txtNombre-".$row[0]; ?>" class="<?php echo "colorT-".$row[0]; ?> <?php echo $stu; ?>"><?php echo $tran->nombre_trans; ?></td>
                        
                        <td id="<?php echo "txtTema-".$row[0]; ?>" class="<?php echo "colorT-".$row[0]; ?> <?php echo $stu; ?>"><?php echo $tran->tema; ?></td>

                        <td id="<?php echo "txtFecha-".$row[0]; ?>" class="<?php echo "colorT-".$row[0]; ?> <?php echo $stu; ?>"><?php echo $tran->fecha_trans; ?></td>
                        <td id="<?php echo "txtHora-".$row[0]; ?>" class="<?php echo "colorT-".$row[0]; ?> <?php echo $stu; ?>"><?php echo $tran->hora_trans; ?></td>
                        <td id="<?php echo "txtUrl-".$row[0]; ?>" class="<?php echo "colorT-".$row[0]; ?> <?php echo $stu; ?>"><?php echo $tran->url; ?></td>
                        
						            <td class="centrar"> 
                          <a type="button" href="../inicio/index.php?controller=transradio&action=editarT&id=<?=$tran->id_transmision?>" class="btn btn-primary ?> btn-sm" id="<?php echo "btnMostrarE-".$row[0]; ?>" onclick="" <?php echo $habilitar; ?>>
                          <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                        </td>

                        <td class="centrar"> 
                          <a type="button" href="../inicio/index.php?controller=transradio&action=eliminar&id=<?=$tran->id_transmision?>" class="btn btn-danger ?> btn-sm" id="<?php echo "btnMostrarE-".$row[0]; ?>" onclick="" <?php echo $habilitar; ?>>
                          <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                      
                      </tr>
                  <?php 
                  ++$n;
                  }
                   ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Tema</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>URL</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
 </form>
 </div>
 </section>

  <script type="text/javascript">

  $(".interruptor").bootstrapToggle('destroy');
  $(".interruptor").bootstrapToggle();

</script>

 <script>
   $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    }) 
  </script>

<script type="text/javascript">

$(document).ready(function() {

    $('#exampleA').DataTable( {
        "language": {
           // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            "url": "../../plugins/datatables/langauge/Spanish.json"
        },
        "order": [[ 0, "asc" ]],
         "paging":   true,
         "ordering": true,
         "info":     true,
         "responsive": true,
         "searching": true,
         "stateSave": false,
         dom: 'Bflrtip', //B=botones, f=buscador, l=dropdown lengthMenu, i=indices, p=paginas
                  lengthMenu: [
                      [ 10, 25, 50, -1 ],
                      [ '10 Registros', '25 Registros', '50 Registros', 'Todos' ],
                  ],
                 columnDefs: [ {
                     
                  }],
                  buttons: [
                            
                          {
                              extend: 'excel',
                              text: "<i class='fa fa-file-excel-o'></i> Exportar a Excel",
                              className: 'btn btn-<?php echo "$sColorCaja";  ?>',
                              title:'Excel',
                              exportOptions: {
                                  columns: ':visible'
                              }
                          }
                            
                  ]
         // "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );
// eInput();
</script>