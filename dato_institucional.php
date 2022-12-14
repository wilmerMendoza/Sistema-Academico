<?php 
include "include/conexion.php"; 
include "include/busquedas.php";
include "include/verificar_sesion.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gentelella Alela! | </title>
    <!-- Bootstrap -->
    <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="Gentella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="Gentella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="Gentella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="Gentella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="Gentella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include "include/menu.php" ?>  
        <!-- Menu en la parte superior -->
        <!-- page content -->
        <div class="right_col" role="main">
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Datos Institucionales</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="example" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>CODIGO MODULAR</th>
                          <th>RUC</th>
                          <th>NOMBRE INSTITUCIONAL</th>
                          <th>DEPARTAMENTO</th>
                          <th>PROVINCIA</th>
                          <th>DISTRITO</th>
                          <th>DIRECCION</th>
                          <th>TELEFONO</th>
                          <th>CORREO</th>
                          <th>NUMERO DE RESULUCION</th>

                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $b_datos_institucional = buscarDatoInstitucional($conexion);
                        while ($res_b_datos_institucional = mysqli_fetch_array($b_datos_institucional)) {
                        ?>
                        <tr>
                          <td><?php echo $res_b_datos_institucional['cod_modular']; ?></td>
                          <td><?php echo $res_b_datos_institucional['ruc']; ?></td>
                          <td><?php echo $res_b_datos_institucional['nombre_institucion']; ?></td>
                          <td><?php echo $res_b_datos_institucional['departamento']; ?></td>
                          <td><?php echo $res_b_datos_institucional['provincia']; ?></td>
                          <td><?php echo $res_b_datos_institucional['distrito']; ?></td>
                          <td><?php echo $res_b_datos_institucional['direccion']; ?></td>
                          <td><?php echo $res_b_datos_institucional['telefono']; ?></td>
                          <td><?php echo $res_b_datos_institucional['correo']; ?></td>
                          <td><?php echo $res_b_datos_institucional['nro_resulucion']; ?></td>
                         
                          <td>
                            <a href="editar_d_insti.php?id=<?php echo $res_b_datos['cod_modular']; ?>" class="btn btn-success"> <i class="fa fa-edit"> </i> Editar</a>
                          </td>
                        </tr>
                        <?php
                        }
                        ?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <!-- /page content -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    
    <!-- jQuery -->
    <script src="Gentella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="Gentella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="Gentella/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="Gentella/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="Gentella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="Gentella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="Gentella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="Gentella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="Gentella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="Gentella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="Gentella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="Gentella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="Gentella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="Gentella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="Gentella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="Gentella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="Gentella/vendors/jszip/dist/jszip.min.js"></script>
    <script src="Gentella/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="Gentella/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="Gentella/build/js/custom.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable({
      "language":{
    "processing": "Procesando...",
    "lengthMenu": "Mostrar _MENU_ registros",
    "zeroRecords": "No se encontraron resultados",
    "emptyTable": "Ningún dato disponible en esta tabla",
    "sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
    "search": "Buscar:",
    "infoThousands": ",",
    "loadingRecords": "Cargando...",
    "paginate": {
        "first": "Primero",
        "last": "Último",
        "next": "Siguiente",
        "previous": "Anterior"
    },
      }
    });

    } );
    </script>
  </body>
</html>